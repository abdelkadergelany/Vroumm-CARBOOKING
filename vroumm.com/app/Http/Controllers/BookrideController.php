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
use App\Mail\carBooking;
use App\Notifications\SMSNotification;
use Illuminate\Notifications\Notifiable;


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
      		return view('front-pages.bookingride')->with("passenger",$request->input('passenger'))->with("rideId",$request->input('rideId'));

      	}


      	if($request->isMethod('post')){

      		$validatedData = $request->validate([

      			'lname' => ['required', 'alpha', 'max:50'],
      			'city' => ['required', 'alpha', 'max:50'],
      			'quater' => ['required', 'alpha_num', 'max:100'],
      			'idcard' => ['required', 'regex:/[0-9]{10}/', 'max:100'], 
      			'phone' => ['required', 'starts_with:6', 'max:9'],       
      			'dob' =>['required'],
      			// 'fname' =>['required', 'alpha', 'max:50'],
      			'pob' => ['required', 'alpha_num', 'max:50'],

      		]);
      		//dd($request->input());

      		$data = $request->input();
      		$user = UserInfo::where('userId',Auth::user()->id)->first();
      		$user->FisrtName = $data['fname'];
      		$user->LastName = $validatedData['lname'];
      		$user->sexe = $data['gender'];
      		$user->city = $validatedData['city'];
      		$user->quater = $validatedData['quater'];
      		$user->DOB = $validatedData['dob'];
      		$user->IdCard = $validatedData['idcard'];
      		$user->phone1 = $validatedData['phone'];
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
          dd("mess");

      		//return redirect('booked-rides');


        }



      }





      public function bookrideconfirmationCallback(Request $request)
      {

       
     

       if($request->isMethod('get')){
         //dd($request->input('passenger'));

         $detail = ride::find($request->input('RideId'));
         $bookingdetail = booking::find($request->input('bookingId'));
         $passenger = User::find($bookingdetail->userId);

         return view('front-pages.bookingrequestValidation')->with('details',$detail)
         ->with('passengerInfo',$passenger)
         ->with('bookingdetail',$bookingdetail);

       }



        if($request->isMethod('post')){


          $ride = ride::find($request->input('rideId'));
          $booking = booking::find($request->input('bookingId'));
          //increase the number of people already booked for the given ride
          $temp = $ride->passenger;
          $ride->passenger =$temp + $booking->PlaceBooked;
          $ride->save();

          //get driver name
           $driverName = User::find( $ride->userId);
          
            //get passenger name
           $passenger = User::find( $booking->userId);
           //set booking confirmation for the passsenger
          $booking->isConfirmed =1;


      $data = array( "From" => $ride->From,"To" => $ride->To,"name"=>$passenger->name,"rideDetails"=> $ride,"driverName"=> $driverName->name);

            Mail::to($passenger->->email)->send(new carBooking($data));





        }






     }












   }


