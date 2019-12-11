<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;
use App\User;
use App\ride;
use App\booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\confirmationMail;
use App\Mail\carBooking;
use App\Notifications\SMSNotification;
use Illuminate\Notifications\Notifiable;
use Flashy;


class BookrideController extends Controller
{
    //


    //
      /**
     * Create a new controller instance.
     *
     * @return void
     */
      public function __construct()
      {
      	$this->middleware(['auth']);
      }




      public function bookride(Request $request)
      {  
      	if($request->isMethod('get')){
         //dd($request->input('passenger'));

          $userInf = UserInfo::firstOrCreate(['userId'=>Auth::user()->id]);

      		return view('front-pages.bookingride')
          ->with("passenger",$request->input('passenger'))
          ->with("rideId",$request->input('rideId'))
          ->with('userInfos',$userInf);

      	}


      	if($request->isMethod('post')){


      		$validatedData = $request->validate([

      			 'lname' => ['required','regex:/^[a-zA-Z\s]+$/', 'max:50','Min:2'],
        'city' => ['required','regex:/^[a-zA-Z\s]+$/','Min:2', 'max:100'],
        'quater' => ['required','regex:/^[a-zA-Z0-9\s]+$/', 'max:50'],
        'idcard' => ['required','regex:/^[0-9]+$/', 'max:10','Min:10'],
      			 'phone' => ['required','starts_with:6','regex:/[0-9]{9}/', 'max:9','Min:9'],     
      			'dob' =>['required'],
      			'fname' =>['required', 'regex:/^[a-zA-Z\s]+$/', 'max:100'],
      			'pob' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:50'],

      		]);
      		//dd($request->input());

      		$data = $request->input();
      		$user = UserInfo::firstOrCreate(['userId'=>Auth::user()->id]);
      		$user->FisrtName = $data['fname'];
      		$user->LastName = $validatedData['lname'];
      		$user->sexe = $data['gender'];
      		$user->city = $validatedData['city'];
      		$user->quater = $validatedData['quater'];
      		$user->DOB = $validatedData['dob'];
      		$user->IdCard = $validatedData['idcard'];
      		$user->phone1 = $validatedData['phone'];
          $user->PlaceOfBirth = $validatedData['pob'];
      		$user->save();


      	$bookingId =	booking::create([
      			'userId' => Auth::user()->id,
      			'RideId' => $data['rideId'],
      			'PlaceBooked' => $data['passenger'],

      		]);
          $userRide = ride::where('id',$data['rideId'])->first();
         // $temp =$userRide->passenger;
         // $userRide->passenger = $data['passenger']+ $temp  ;
         // $userRide->save();



          $useremail = User::where('id',$userRide->userId)->first();


             //sending email to the driver
          $data = array( "title" => " ","From" => $userRide->From,"To" => $userRide->To,"name"=>$useremail->name,"RideId"=> $userRide->id,"bookingId"=> $bookingId->id );

      		//updating the number of places available


          Mail::to($useremail->email)->send(new carBooking($data));
          

      		
          return redirect('booked-rides')->with("flashmessage",trans("reservation request sent to the driver, you will receive an email in case of confirmation"));


        }



      }





      public function bookrideconfirmationCallback(Request $request)
      {

       
     

       if($request->isMethod('get')){
         //dd($request->input('passenger'));

         $detail = ride::find($request->input('RideId'));
         $bookingdetail = booking::find($request->input('bookingId'));
         //return client to home page if the ride was already confirmed
         if($bookingdetail->isConfirmed==1)
         {
            return redirect('home');

         }
         $passenger = User::find($bookingdetail->userId);

         return view('front-pages.bookingrequestValidation')->with('details',$detail)
         ->with('passengerInfo',$passenger)
         ->with('bookingdetail',$bookingdetail);

       }



        if($request->isMethod('post')){


          
        if($request->input('action')=='cancel'){

         Flashy::primary(trans('Ride request canceled successfully'), '');
         return redirect('offered-rides');


        }



          if($request->input('action')=='confirm'){

          $ride = ride::find($request->input('rideId'));
          $booking = booking::find($request->input('bookingId'));


          //return user to home page if the ride is already confirmed
           if($booking->isConfirmed!=0)
         {
            return redirect('home');

         }
          //increase the number of people already booked for the given ride
          $temp = $ride->passenger;
          $ride->passenger =$temp + $booking->PlaceBooked;
          $ride->save();

          //get driver name
           $driverName = User::find( $ride->userId);

           //get driver personnal infos
           $personalInfo = UserInfo::where('userId',$ride->userId)->first();
          
            //get passenger name
           $passenger = User::find( $booking->userId);
           //set booking confirmation for the passsenger
          $booking->isConfirmed = 1;
          $booking->save();



      $data = array( "From" => $ride->From,"To" => $ride->To,"name"=>$passenger->name,"rideDetails"=> $ride,"driverName"=> $driverName->name,
        "personalInfo"=>$personalInfo);

            Mail::to($passenger->email)->send(new confirmationMail($data));
            dd("success");



         }

        }

        




     }












   }


