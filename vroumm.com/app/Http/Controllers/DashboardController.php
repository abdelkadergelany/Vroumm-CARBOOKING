<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;
use App\ride;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\booking;
use App\car;
use Image;
use Flashy;
use Illuminate\Support\Facades\Validator;
use App\Notifications\validationNotiification;

class DashboardController extends Controller
{
    //


     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {  
    //     return view('front-pages.profile');
    // }





    public function index()
    {  
        //return view('front-pages.profile');
    }


 public function see_details(Request $request)
    {  
        
        $ride = ride::find($request->input('rideId'));
       
        $personalInfo = UserInfo::where('userId',$ride->userId)->first();
         
       return view('front-pages.seeConfirmationDetails')->with('ride',$ride)->with('personalInfo',$personalInfo);

    }






    public function profile(Request $request)
    {  


     if($request->isMethod('get')){

         $userInf =UserInfo::firstOrCreate(['userId'=>Auth::user()->id]);


         return view('front-pages.profile')->with('userInfos',$userInf);

     }



     if($request->isMethod('post')){



       $validatedData = $request->validate([
        'lname' => ['regex:/^[a-zA-Z\s]+$/', 'max:50','Min:2','nullable'],
        'city' => [ 'regex:/^[a-zA-Z\s]+$/','Min:2', 'max:100','nullable'],
        'quater' => [ 'regex:/^[a-zA-Z0-9\s]+$/', 'max:50','nullable'],
        'idcard' => [ 'regex:/^[0-9]+$/', 'max:10','Min:10','nullable'],
        'idlicence' => [ 'alpha_dash', 'max:12','Min:12','nullable'],
        'phone' => [ 'starts_with:6','regex:/[0-9]{9}/', 'max:9','Min:9','nullable'],
        'phone2' => [ 'starts_with:6','regex:/[0-9]{9}/', 'max:9','Min:9','nullable'],
        'fname' =>['regex:/^[a-zA-Z\s]+$/','Min:2','max:50','nullable'],
    ]);


       $UserInfo = UserInfo::where('userId',Auth::user()->id)->first();



       if ( $validatedData['lname'] != null) {

        $UserInfo->LastName =  $validatedData['lname'];
    }



    if ( $validatedData['city']!= null) {

        $UserInfo->city =  $validatedData['city'];
    }

    if ( $validatedData['quater']!= null) {

        $UserInfo->quater =  $validatedData['quater'];
    }


    if ( $validatedData['idcard']!= null) {

        $UserInfo->IdCard =  $validatedData['idcard'];
    }


    if ( $validatedData['idlicence']!= null) {

        $UserInfo->DriverLicenceNumber =  $validatedData['idlicence'];
    }


    if ( $validatedData['phone']!= null) {

        $UserInfo->phone1 =  $validatedData['phone'];
    }


    if ( $validatedData['phone2']!= null) {

        $UserInfo->phone2 =  $validatedData['phone2'];
    }



    if ( $validatedData['fname']!= null) {

        $UserInfo->FisrtName =  $validatedData['fname'];
    }

    $UserInfo->save();

    Flashy::primary(trans('informations updated'), '');
    $userInf =UserInfo::where('userId',Auth::user()->id)->first();


    return view('front-pages.profile')->with('userInfos',$userInf);



}



}





public function photo(Request $request)
{  
    if($request->isMethod('get')){

     return view('front-pages.upload-pict');
 }


 if($request->isMethod('post')){


   $validatedData = $request->validate([

    'image' => ['required', 'image','mimes:jpeg,png,jpg,gif,svg', 'max:1000141'],           
]);

   $image = $request->file('image');

   $input['imagename'] = date("d-m-Y").Auth::user()->name.rand().'.'.$image->extension();



   $destinationPath = public_path('/thumbnail');

   $img = Image::make($image->path());

   $img->resize(150, 150, function ($constraint) {

    $constraint->aspectRatio();

})->save($destinationPath.'/'.$input['imagename']);



   $destinationPath = public_path('/profile');

   $image->move($destinationPath, $input['imagename']);


   $user = UserInfo::firstOrCreate(['userId'=>Auth::user()->id]);

   $user->profilepict = $input['imagename'];
   $user->save();


   Flashy::primary(trans('image uploaded'), '');


   return view('front-pages.upload-pict');
}


}

public function notifications(Request $request){
    
    $user =  Auth::user();
   $notif = $user->notifications;

   foreach ($user->unreadNotifications as $notification) {
    $notification->markAsRead();
}

      return view('front-pages.notifications')->with('notifications',$notif);

}


public function mycar(Request $request)

{     


    if($request->isMethod('get')){

        //$car = car::where('userId',Auth::user()->id)->first();

        $car = car::firstOrCreate(['userId' => Auth::user()->id]);


        //  dd($car->color);

        return view('front-pages.mycars')->with('car',$car);
    }


    if($request->isMethod('post')){

      $validatedData = $request->validate([

         'immat' => ['required','regex:/^[a-zA-Z0-9\s]+$/', 'max:12'],
         'color' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:50'],
         'carmodel' => ['required','regex:/^[a-zA-Z0-9\-\s]+$/','max:50'],
     ]);

      $car = car::where('userId',Auth::user()->id)->first();

      $car->immatriculation = $validatedData['immat'];
      $car->model  = $validatedData['carmodel'];
      $car->color  = $validatedData['color'];

      $car->save();


      $car = car::where('userId',Auth::user()->id)->first();

      Flashy::primary(trans('car updated'), '');

      return view('front-pages.mycars')->with('car',$car);



  }




}






public function offered_rides(Request $request)
{  


 $rides = User::find(Auth::user()->id)->ride('userId')->orderBy("created_at","DESC")->paginate(6);

 $count = User::find(Auth::user()->id)->ride('userId')->get();


 return view('front-pages.offered-rides')->with('rides',$rides)->with('count',$count->count());
}



public function booked_rides(Request $request)
{    

 $bookedrides = booking::where('userId',Auth::user()->id)->orderBy("created_at","DESC")->paginate(6);

 $count = booking::where('userId',Auth::user()->id)->get();


 return view('front-pages.booked-rides')->with('bookedrides',$bookedrides)->with('count',$count->count());

}



public function offer_ride(Request $request)
{   
    if($request->isMethod('get')){

       $userInf = UserInfo::firstOrCreate(['userId'=>Auth::user()->id]);
       $car = car::firstOrCreate(['userId' => Auth::user()->id]);

       return view('front-pages.offer-ride')->with('userInfos',$userInf)->with('car',$car);


   }

   if($request->isMethod('post')){


       $validatedData = $request->validate([
         'lname' => ['required','regex:/^[a-zA-Z\s]+$/', 'max:50','Min:2'],
         'city' => ['required','regex:/^[a-zA-Z\s]+$/','Min:2', 'max:100'],
         'quater' => ['required','regex:/^[a-zA-Z0-9\s]+$/', 'max:50'],
         'idcard' => ['required','regex:/^[0-9]+$/', 'max:10','Min:10'],
         'idlicence' => ['required','alpha_dash', 'max:12','Min:12'],
         'phone' => ['required','starts_with:6','regex:/[0-9]{9}/', 'max:9','Min:9'],
         'phone2' => ['starts_with:6','regex:/[0-9]{9}/', 'max:9','Min:9','nullable'],
         'dob' =>['required'],
         'picktpoint' =>['required','regex:/^[a-zA-Z0-9\s]+$/','max:100'],
         'dropoint' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/', 'max:100'], 
         'color' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:100'],
         'kg' => ['required','numeric'],
         'price' => ['required', 'numeric'],
         'sites' => ['required', 'numeric'],
         'From' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'different:To'],
         'To' => ['required','regex:/^[a-zA-Z\s]+$/','different:From'],
         'hour' => ['required'],
         'departure' => ['required'],
         'fname' =>['required', 'regex:/^[a-zA-Z\s]+$/', 'max:100'],
         'carmodel' => ['required','regex:/^[a-zA-Z0-9\-\s]+$/','max:100'],
     ]);



       $data = $request->input();
       $user = UserInfo::where('userId',Auth::user()->id)->first();
       $user->FisrtName = $validatedData['fname'];
       $user->LastName = $validatedData['lname'];
       $user->sexe =  $data['gender'];
       $user->city = $validatedData['city'];
       $user->quater = $validatedData['quater'];
       $user->DOB = $validatedData['dob'];
       $user->DriverLicenceNumber = $validatedData['idlicence'];
       $user->IdCard = $validatedData['idcard'];
       $user->phone1 = $validatedData['phone'];
       $user->phone2 = $validatedData['phone2'];
       $user->save();

       ride::create([
        'userId' => Auth::user()->id,
        'From' => $data['From'],
        'To' => $data['To'],
        'PickPoint' => $data['picktpoint'],
        'DropPoint' => $data['dropoint'],
        'NumberOfPlaces' => $data['sites'],
        'KgPerPerson' => $data['kg'],

        'CarModel' => $data['carmodel'],
        'CarColor' => $data['color'],
        'price' => $data['price'],
        'DepartureDate' => $data['departure'],
        'DepartureTime' => $data['hour'],
        'KgPerPerson' => $data['kg'],
    ]);

         // Flashy::primary(trans('you will receive an email if a passenger book in'), '');
       return redirect('offered-rides')->with("flashmessage",trans("ride published successfully! you will receive an email once a passenger booked in"));
   }





}

}



