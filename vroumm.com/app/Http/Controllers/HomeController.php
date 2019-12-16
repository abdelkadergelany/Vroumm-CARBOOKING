<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\ride;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Flashy;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
          
        return view('home');
    }


    public function ChangeLanguage(Request $request)
    {   
      
           $data=$request->input();
            App::setLocale($data['lang']);
          
         return redirect('home');
         //return back();
 
    }



      public function find_ride(Request $request)
    {       


           if($request->isMethod('get')){

            if ($request->input('From')!=null && $request->input('To')!=null)

            {
                 $ride = ride::where('From','like',$request->input('From'))
                              ->where('To','like',$request->input('To'))
                              ->where('isBlocked','0')
                              ->orderBy("created_at","DESC")
                              ->paginate(8);

                              return view('front-pages.find-ride')->with('rides',$ride)
                              ->with('From',$request->input('From'))
                              ->with('To',$request->input('To'));

            }



                elseif ($request->input('From')==null && $request->input('To')==null)

            {
                 $ride = ride::where('isBlocked','0')
                              ->orderBy("created_at","DESC")
                              ->paginate(8);

                              return view('front-pages.find-ride')->with('rides',$ride);
                         
            }


            else
            {
                return back();
            }
          


           }



           if($request->isMethod('post')){


 
                       if($request->input('departureDate')!=null)
                       { 

                       $ride = ride::where('From','like',$request->input('From'))
                              ->where('To','like',$request->input('To'))
                              ->where('DepartureDate','=',$request->input('departureDate'))
                              ->where('isBlocked','0')
                              ->orderBy("created_at","DESC")
                              ->paginate(8);
                               return view('front-pages.find-ride')->with('rides',$ride);
                  }



                  else{   // dd('aly');

                       $ride = ride::where('From','like',$request->input('From'))
                              ->where('To','like',$request->input('To'))
                              ->where('isBlocked','0')
                              ->orderBy("created_at","DESC")
                              ->paginate(8);
                               return view('front-pages.find-ride')->with('rides',$ride);

                  }


           }
      
                
         
 
    }


        public function ride_details(Request $request)
    {   
             
             $detail = ride::find($request->input('id'));

              //if the request to view detail is coming from a driver do not display the bookable form
             //951159951159 is the value that shows the ride detail request is from the driver
                if($request->input('v')=='951159951159')
                return view('front-pages.ride-details')->with('details',$detail)->with("viewtype",'unbookable');

                elseif ($request->input('v')=='123321654')
                     return view('front-pages.ride-details')->with('details',$detail);
                 else
                 return back();

         
 
    }

}
