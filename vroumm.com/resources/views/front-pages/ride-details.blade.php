@extends('layouts.app')


@section('title')
vroumm-details
@endsection

@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('Ride details') }}

@endslot

@slot('current_page_bread_crumb')
{{ __('Ride details') }}
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
      <img src="thumbnail/{{getProfilePict($details->userId)}}" class="rounded-circle" alt="Cinque Terre" width="150" height="150">
      <figcaption>{{getName($details->userId)}}</figcaption>
      <!-- <figcaption>Sexe: Male</figcaption> -->
    </figure>
  </div>
  <div class="col-md-4">
    <h5 class="text-center text-primary">  {{ \Carbon\Carbon::parse($details->DepartureDate)->format('j F, Y') }}  &nbsp;     {{$details->DepartureTime}}</h5>
  </div>
  <div class="col-md-4"><br><br>
    <h5 class="text-center text-danger">{{__('Price') }}: {{$details->price}} FCFA</h5>
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
  {{__("Car's Model") }}:<h3>{{$details->CarModel}}</h3>
  {{__("Car's Color") }}:<h3>{{$details->CarColor}}</h3>
  {{__('Number of sites') }}:<h3>{{$details->NumberOfPlaces}}</h3>
  {{__('Kg Per person') }}:<h3>{{$details->KgPerPerson}} Kg</h3>
  {{__('Sites alredy booked') }}:<h3>{{$details->passenger}}</h3>
</div>

</div>
<hr>
<!-- <div class="row">

    <div class="form-group col-md-12">
    <span class="text-danger">Special Notice : </span><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste. Lorem Ipsum available.
  </div> -->

   @if(!isset($viewtype))
  <form class="col-md-12"  action="{{ route('bookride') }}" method="get">

    <input type="hidden" value="{{$details->id}}" name="rideId">
    @csrf
    <div class="row p-3" style="background-color: #999999">
     @if($details->NumberOfPlaces != $details->passenger )
     <label class="col-md-2">{{__('number of places to book') }}</label>
     <div class="form-group col-md-4">

       <input placeholder="{{__('number of places to book') }}" type="Number" min="1"   max="{{$details->NumberOfPlaces-$details->passenger}}"  class="form-control" name="passenger" required>
     </div>
     <div class="form-group col-md-4">
      <input  type="submit"  class="form-control btn-info"  value="{{__('Book Now') }}">

      <!--  <button class="btn btn-lg btn-info" type="submit" value="">Book Now</button> -->
    </div>

    @else

    <div class="form-group col-md-12">
     <h3 class="text-center text-white">{{__('sorry this car is full') }}</h3>
   </div>

   @endif
 </form>
 @endif
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
