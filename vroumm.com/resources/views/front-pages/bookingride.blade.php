@extends('layouts.app')


@section('title')
vroumm-contact
@endsection

@section('morefiles')

<link rel="stylesheet" href="{{asset('css/ride-registration.css')}}"> 
<link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}"> 

@endsection


@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('Offer a ride') }}

@endslot

@slot('current_page_bread_crumb')
{{ __('Offer a ride') }}
@endslot

@endcomponent

@endsection


@section('content')



<div class="container" >


  <form id="regForm" action="{{ route('bookride') }}" method="POST">
    @csrf

    <p  class="btn btn-lg btn-info m-auto text-center">{{ __('Ride Informations') }}</p>








    <div class="tab ">


     


      @if ($errors->any())
      <div class="alert alert-danger">
        <p>{{__('please review the form and correct the following errors') }}:</p>
        <ul> 
          
         
         @error('lname') <p> {{__('Given names') }} incorrect</p> @enderror
          @error('fname') <p>{{ __('Surname') }} incorrect</p> @enderror
          @error('phone') <p>{{ __('phone number is invalid') }} </p> @enderror
          @error('city') <p>{{__('City') }} incorrect</p> @enderror
          @error('quater') <p>{{__('Quater') }} incorrect</p> @enderror
          @error('idcard') <p>{{ __('Id Card Number') }} incorrect</p> @enderror
         
          @error('dob') <p>{{ __(' Date Of Birth') }} incorrect</p> @enderror
         
        
        </ul>
      </div>
      @endif
      <!-- <h6 class="text-center text-white text-uppercase pt-2"><b> {{ __('Itinerary') }}<b></h6> -->



       <h6 class="text-center text-white text-uppercase pt-2"><b>{{__('Personal Infos') }}:<b></h6>

         <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fname">
             {{__('Surname') }}
           </label>
           <div class="form-holder">

           @if($userInfos->FisrtName!=null)
           <input value="{{ $userInfos->FisrtName }}" required type="text" id="fname"  placeholder="first name" name="fname"  class=" form-control">
             @else
               <input required type="text" id="fname"  placeholder="first name" name="fname"  class=" form-control">
             @endif
          </div>
        </div>

        <div class="col-xl">
          <label for="lname">
            {{ __('Given names') }}
          </label>
          <div class="form-holder">
             @if($userInfos->LastName!=null)
            <input value="{{ $userInfos->LastName }}" required type="text" id="lname"  placeholder="given name" name="lname"  class=" form-control">
            @else
             <input required type="text" id="lname"  placeholder="given name" name="lname"  class=" form-control">
             @endif
          </div>
        </div>




      </div>




      <div class="form-row ">
        <div class="form-group col-md-6">
          <label for="city">
           {{__('City') }}
         </label>
         <div class="form-holder">


            @if($userInfos->city!=null)
    <input required id="city" value="{{ $userInfos->city }}" placeholder="city" name="city"  type="text" class="form-control">
    @else
    <input required id="city" placeholder="city" name="city"  type="text" class="form-control">
    @endif

        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="quater">
         {{__('Quater') }}
       </label>
       <div class="form-holder">

        @if($userInfos->quater!=null) 
   <input required value="{{ $userInfos->quater }}" id="quater" name="quater" placeholder="quater"  type="text" class="form-control " >
   @else
   <input required id="quater" name="quater" placeholder="quater"  type="text" class="form-control " >
   @endif

      </div>
    </div>
  </div>



  <div class="form-row ">
    <div class="form-group col-md-6">
      <label for="idnum">
        {{ __('Id Card Number') }}
      </label>
      <div class="form-holder">

        
      @if($userInfos->IdCard!=null)
     <input required value="{{ $userInfos->IdCard }}" id="idnum"  name="idcard" placeholder="id card number" type="text" class="form-control">
     @else
     <input required id="idnum"  name="idcard" placeholder="id card number" type="text" class="form-control">
     @endif
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="driving " style="visibility: hidden;">
        ------
      </label>
      <div class="form-holder">

        <input  id="driving" name="idlicence"  disabled type="text" class="form-control " >

      </div>
    </div>
  </div>



  <div class="form-row ">
    <div class="form-group col-md-6">
      <label for="email">
        {{__('email') }}
      </label>
      <div class="form-holder">

        <input disabled   id="email" placeholder="email" type="email" class="form-control">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="phone">
       {{__('Phone') }}
     </label>
     <div class="form-holder">

 @if($userInfos->phone1!=null)
    <input required value="{{ $userInfos->phone1 }}" placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone"   type="tel" class="form-control " >
    @else
    <input required placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone"   type="tel" class="form-control " >
    @endif




    </div>
  </div>
</div>



<div class="row">


 <div class="col-md-4">
  <label for="sexe">
    {{__(' Gender') }}
  </label>
  <div class="form-group">
    <select required id="sexe" class="form-control" name="gender"  >
       @if($userInfos->sexe!=null)
     @if($userInfos->sexe=='Male')

     <option  selected>Male</option>
     <option  >Female</option>
     @endif

     @if($userInfos->sexe=='Female')
     <option selected >Female</option>
     <option  >Male</option>
     @endif

     @endif


     @if($userInfos->sexe==null)
     <option value="">Chose your gender</option>
     <option >Male</option>
     <option  >Female</option>
     @endif
    </select>

  </div>
</div>
<div class="col-md-4">
  <label for="DOB">
    {{ __(' Date Of Birth') }}
  </label>
  <div class="form-group">

    @if($userInfos->DOB!=null)

   <input required value="{{ $userInfos->DOB }}" type="text" name="dob" class=" inputer form-control datepicker-here" placeholder="yyyy-mm-dd" data-language='en' data-date-format="yyyy-mm-dd" id="DOB">
   @else
   <input required type="text" name="dob" class=" inputer form-control datepicker-here" placeholder="yyyy-mm-dd" data-language='en' data-date-format="yyyy-mm-dd" id="DOB">

   @endif



 </div>
</div>

<div class="col-md-4">
  <label for="pob">
    {{ __(' Place Of Birth') }}
  </label>
  <div class="form-group">

@if($userInfos->PlaceOfBirth!=null)

   <input required value="{{ $userInfos->PlaceOfBirth }}" type="text" name="pob" class="  form-control " placeholder="place of birth"  id="pob">
   @else
    <input required type="text" name="pob" class="  form-control " placeholder="place of birth"  id="pob">
@endif



 </div>
</div>


</div>


</div>














<input type="hidden" value="{{$rideId}}" name="rideId">


<input type="hidden" value="{{$passenger}}" name="passenger">


<div class="row">
  <!-- <div style="float:right;">
    <button class="btn-info btn-sm" type="button" id="prevBtn" onclick="nextPrev(-1)"> {{__(' Previous') }}</button>
    <button class="btn-info btn-sm" type="button" id="nextBtn" onclick="nextPrev(1)"> {{__(' Next') }}</button>
  </div> -->
  <div class="form-group col-md-4"></div>
  <div class="form-group col-md-4"><br>
    <input  type="submit"  class="form-control btn-info" name="" value="{{__('Book Now') }}">

    <!--  <button class="btn btn-lg btn-info" type="submit" value="">Book Now</button> -->
  </div>
  <div class="form-group col-md-4"></div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>


</div>

<br><br><br><br>








@component('components.video-area-component')
@slot('pictname')
paralax.jpg
@endslot
@endcomponent


@component('components.paralax-form-component')

@endcomponent




@endsection


@section('morescript')


<!-- <script src="{{asset('js/ride-registration.js')}}"></script> -->
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/datepicker.js')}}"></script>
<script src="{{asset('js/datepicker.en.js')}}"></script>
<script >
  $( document ).ready(function() {
   var x = document.getElementsByClassName("tab");
   x[0].style.display = "block";
 });


</script>

@endsection