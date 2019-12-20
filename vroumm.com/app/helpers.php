<?php
use App\UserInfo;
use App\ride;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\booking;
use App\city;
use App\Testimonial;
use App\Page;


if(!function_exists('getFrom')){

  function getFrom($id)
  {
  $rides = ride::find($id);
  
   return $rides->From;
 }

}


if(!function_exists('getFaqs')){

  function getFaqs()
  {
  $page = Page::find(2);
 // dd($page);
   return $page->body;
 }

}



if(!function_exists('get_termAndConditions')){

  function get_termAndConditions()
  {
  $page = Page::find(1);
  
   return $page->body;
 }

}



if(!function_exists('getProfilePict')){

  function getProfilePict($id)
  {

  $pict = UserInfo::where('userId',$id)->first();

   return $pict->profilepict;
 }

}


if(!function_exists('getTestimonial')){

  function getTestimonial()
  {
  $testimonial = Testimonial::All();
   return $testimonial;
 }

}





if(!function_exists('getTo')){

  function getTo($id)
  {
  $rides = ride::find($id);
   return "$rides->To";
 }

}



if(!function_exists('getName')){

  function getName($id)
  {
  $name = User::find($id);
   return "$name->name";
 }

}





if(!function_exists('getCities')){

  function getCities()
  {
      $cities = city::where('name','!=',null)->orderBy("name","ASC")->get();
       
        return $cities;

 }

}



if(!function_exists('getDater')){

  function getDater($id)
  {

    
    $rides = ride::find($id);

  $depdat =	\Carbon\Carbon::parse( $rides->DepartureDate )->format('j F, Y');
  //dd($depdat);
 // dd($rides->DepartureDate);
   return $depdat;
 }

}




if(!function_exists('getTimer')){

  function getTimer($id)
  {
  $rides = ride::find($id);
   return $rides->DepartureTime;
 }

}