@extends('layouts.app')


@section('title')
booking-validation
@endsection

@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('Booking request validation') }}

@endslot

@slot('current_page_bread_crumb')
{{ __('Booking request validation') }}
@endslot

@endcomponent

@endsection


@section('content')




<br><br><br>
<div class=" container p-3" style="background-color: #a6a6a666 ; z-index: 1;
border-radius: 10px;
box-shadow:10px 10px grey, -1em 0 .4em grey;
transition: box-shadow 0.3s ease-in;">

<div class="row">

  <div class="col-md-4">
    <span> {{ __('Driver') }} </span><br>
    <figure>
      <img src="http://danblackonleadership.info/wp-content/uploads/2015/10/driving-man-760x506.jpg" class="rounded-circle" alt="Cinque Terre" width="70" height="70">
      <figcaption>{{Auth::user()->name}}</figcaption>
      <!-- <figcaption>Sexe: Male</figcaption> -->
  </figure>
</div>
<div class="col-md-4">
    <h2 class="text-center text-primary">  {{ \Carbon\Carbon::parse($details->DepartureDate)->format('j F, Y') }}  &nbsp;     {{$details->DepartureTime}}</h2>
</div>
<div class="col-md-4"><br><br>
    <h4 class="text-center text-danger">{{__('Price') }}: {{$details->price}} FCFA</h4>
</div>

</div>

<div class="row">

  <div class="col-md-6">
     {{ __('Leaving From') }}: <h3>{{$details->From}}</h3>

 </div>

 <div class="col-md-6">
     {{ __('Going To') }}: <h3>{{$details->To}}</h3>
 </div>

</div>

<div class="row">

  <div class="col-md-6">
     {{ __('Pick Point') }} <h3>{{$details->PickPoint}}</h3>
 </div>

 <div class="col-md-6">
  {{ __('Drop Point') }}:<h3>{{$details->DropPoint}}</h3>
</div>

</div>

<hr>
<div class="row">

  <div class="col-md-6">
     <figure>
        <img src="img/caravatar.png" class="rounded-circle" alt="" width="300" height="300">
        <figcaption class="font-weight-bolder"></figcaption>
    </figure>
</div>

<div class="col-md-6">


  <span> {{ __('Passenger') }} </span><br>
  <figure>
      <img src="http://danblackonleadership.info/wp-content/uploads/2015/10/driving-man-760x506.jpg" class="rounded-circle" alt="Cinque Terre" width="70" height="70">
      <figcaption>{{$passengerInfo->name}}</figcaption>
      <!-- <figcaption>Sexe: Male</figcaption> -->
  </figure><br><br>

  {{__('Number of Sites booked') }}:<h3>{{$bookingdetail->PlaceBooked}}</h3>

<!--   {{__("Car's Model") }}:<h3>{{$details->CarModel}}</h3>
  {{__("Car's Color") }}:<h3>{{$details->CarColor}}</h3>
  {{__('Number of sites') }}:<h3>{{$details->NumberOfPlaces}}</h3>
  {{__('Kg Per person') }}:<h3>{{$details->KgPerPerson}} Kg</h3>
  {{__('Passsengers') }}:<h3>{{$details->KgPerPerson}} Kg</h3> -->
</div>

</div>
<hr>




<div class="row p-3" style="background-color: #999999">


 <div class="form-group col-md-6">
    <form action="{{route('bookrideconfirmationCallback')}}" method="post">


       <input type="hidden" name="action"   value="confirm" >
       <input type="hidden" name="bookingId"   value="{{$bookingdetail->id}}" >

       <input type="hidden" name="rideId"   value="{{$details->id}}" >

       <input type="submit" class="form-control btn btn-success " value="{{__('Confirm') }}"> 
   </form>
</div>

<div class="form-group col-md-6">
    <form action="{{route('bookrideconfirmationCallback')}}" method="post">
        
      <input type="hidden" name="action"   value="Cancel" >
      <input type="hidden" name="bookingId"   value="{{$bookingdetail->id}}" >

      <input type="hidden" name="rideId"   value="{{$details->id}}" >

      <input type="submit" class="form-control btn btn-danger " value="{{__('Cancel') }}">
  </form>

</div>

</div>





</div>


</div>

<br><br><br>






@component('components.video-area-component')
@slot('pictname')
paralax.jpg
@endslot
@endcomponent


@component('components.paralax-form-component')

@endcomponent



@endsection
