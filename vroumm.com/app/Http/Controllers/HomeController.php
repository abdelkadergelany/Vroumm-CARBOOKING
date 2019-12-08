<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\ride;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



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
       // dd(App::getLocale($lang));
           $data=$request->input();
            App::setLocale($data['lang']);
          // dd(App::getLocale($lang));
         return view('home');
         //return back();
 
    }



      public function find_ride(Request $request)
    {   
      
                return view('front-pages.find-ride');

         
 
    }


        public function ride_details(Request $request)
    {   
             
             $detail = ride::find($request->input('id'));

                return view('front-pages.ride-details')->with('details',$detail);

         
 
    }

}
