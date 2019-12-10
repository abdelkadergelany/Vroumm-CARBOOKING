<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;
use App\ride;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\booking;
use Image;
use Flashy;

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







    public function profile(Request $request)
    {  

        return view('front-pages.profile');
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


           $user = UserInfo::where('userId',Auth::user()->id)->first();

           $user->profilepict = $input['imagename'];
           $user->save();


           Flashy::primary(trans('image uploaded'), '');


             return view('front-pages.upload-pict');
        }

       
    }




    public function mycar(Request $request)
    {  
        return view('front-pages.mycars');
    }






    public function offered_rides(Request $request)
    {  


         $rides = User::find(Auth::user()->id)->ride('userId')->orderBy("created_at","DESC")->paginate(6);
        

        

        return view('front-pages.offered-rides')->with('rides',$rides)->with('count',$rides->count());
    }



    public function booked_rides(Request $request)
    {    

         $bookedrides = booking::where('userId',Auth::user()->id)->orderBy("created_at","DESC")->paginate(6);
              // foreach ($bookedrides as $bookedrides) {
              //     # code...
              //   dd(serialize($bookedrides->created_at));
              // }
      
       return view('front-pages.booked-rides')->with('bookedrides',$bookedrides)->with('count',$bookedrides->count());

   }



   public function offer_ride(Request $request)
   {   
    if($request->isMethod('get')){

        return view('front-pages.offer-ride');


    }

    if($request->isMethod('post')){
        //dd($request->input());
   //$validatedData = $request->input();
     $validatedData = $request->validate([
         
        'lname' => ['required', 'alpha', 'max:100'],
        'city' => ['required', 'alpha', 'max:100'],
        'quater' => ['required', 'alpha_num', 'max:100'],
        'idcard' => ['required', 'regex:/[0-9]{10}/', 'max:100'],
        'idlicence' => ['required', 'regex:/[0-9]{12}/', 'max:12'],
        'phone' => ['required', 'starts_with:6', 'max:9'],
         'phone2' => [ 'starts_with:6', 'max:9'],
        'dob' =>['required'],
        'picktpoint' =>['required', 'alpha_num', 'max:100'],
        'dropoint' => ['required', 'alpha_num', 'max:100'], 
        'color' => ['required', 'alpha', 'max:100'],
        'kg' => ['required', 'numeric'],
        'price' => ['required', 'numeric'],
        'sites' => ['required', 'numeric'],
        'From' => ['required', 'alpha', 'different:To'],
        'To' => ['required', 'alpha', 'different:From'],
        'hour' => ['required'],
        'departure' => ['required'],
        // 'fname' =>['required', 'alpha', 'max:100'],
         'carmodel' => ['required', 'alpha_num', 'max:100'],
        
    ]);
         // dd($validatedData);
          $data = $validatedData;
     $user = UserInfo::where('userId',Auth::user()->id)->first();
     $user->FisrtName = $validatedData['fname'];
     $user->LastName = $validatedData['lname'];
     $user->sexe = $validatedData['gender'];
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


     return redirect('offered-rides');
}


 


}

}



