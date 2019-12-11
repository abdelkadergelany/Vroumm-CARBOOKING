@extends('layouts.app')


@section('title')
offer-ride
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


  <form id="regForm" action="{{ route('offer-ride') }}" method="POST">
    @csrf

    <p  class="btn btn-lg btn-info m-auto text-center">{{ __('Ride Informations') }}</p>



    


    

    <div class="tab ">





      @if ($errors->any())
      <div class="alert alert-danger">
        <p>{{__('please review the form and correct the following errors') }}:</p>
        <ul> 
          @error('departure') <p> {{__('Departure Date is required') }} </p> @enderror
          @error('hour') <p> {{__('Departure time is required') }} </p> @enderror
          @error('lname') <p> {{__('Given names') }} incorrect</p> @enderror
          @error('fname') <p>{{ __('Surname') }} incorrect</p> @enderror
          @error('phone2') <p>{{ __('whatsapp phone number is invalid') }} </p> @enderror
          @error('phone') <p>{{ __('phone number is invalid') }} </p> @enderror
          @error('city') <p>{{__('City') }} incorrect</p> @enderror
          @error('quater') <p>{{__('Quater') }} incorrect</p> @enderror
          @error('idcard') <p>{{ __('Id Card Number') }} incorrect</p> @enderror
          @error('idlicence') <p>{{ __('Driving Licence') }} incorrect</p> @enderror
          @error('dob') <p>{{ __(' Date Of Birth') }} incorrect</p> @enderror
          @error('picktpoint') <p>{{ __('Pick Point') }} incorrect</p> @enderror
          @error('dropoint') <p>{{ __('Drop Point') }} incorrect</p> @enderror
          @error('carmodel') <p>{{ __("Car's Model") }} incorrect</p> @enderror
          @error('color') <p>{{__("Car's Color") }} incorrect</p> @enderror
          @error('kg') <p>{{__('Kg Per person') }} incorrect</p> @enderror
          @error('price') <p>{{__('Price') }} incorrect</p> @enderror
          @error('sites') <p>{{__('Number of sites') }} incorrect</p> @enderror
          @error('To') <p>{{ __('Going To') }} incorrect.&nbsp;{{ __('destination can not be same with departure city') }}</p> @enderror
          
        </ul>
      </div>
      @endif
      <h6 class="text-center text-white text-uppercase pt-2"><b> {{ __('Itinerary') }}<b></h6>


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="first-disabled"><b>{{ __('Leaving From') }}</b></label>

            <select   id="first-disabled" class="inputer selectpicker form-control " data-hide-disabled="false"
            data-live-search="true" name="From" >

            @foreach($city=getCities() as $cit)
            <option >{{$cit->name}}</option>
            @endforeach

          </select>
        </div>

        <div class="form-group col-md-6 " >

         <label for="second-disabled"><b>{{ __('Going To') }}</b></label>

         <select  id="second-disabled" class="inputer selectpicker form-control" data-hide-disabled="false"
         data-live-search="true" name="To" >
         @foreach($city=getCities() as $cit)
         <option >{{$cit->name}}</option>
         @endforeach

       </select>

     </div>
   </div>



   <div class="form-row">
    <div class="form-group col-md-6">


      <div class="form-group">
        <label for="Pick-Point"><b>{{ __('Pick Point') }}</b></label>
        <input  type="text" class="inputer form-control " id="Pick-Point" placeholder="eg: devant Total Ngousso" name="picktpoint">
      </div>
      
    </div>





    <div class="form-group col-md-6 " >


      <label for="Drop-Point"><b>{{ __('Drop Point') }}</b></label>
      <input  type="text" class=" inputer form-control" id="Drop-Point" placeholder="Drop Point" name="dropoint">
      
      
      

    </div>
  </div>





  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Departure-Date">{{ __('Departure date') }}</label>
      <input placeholder="yyyy-mm-dd" type="text" class=" inputer form-control datepicker-here" data-language='en' data-date-format=" yyyy-mm-dd" id="Departure-Date" name="departure"  >
      
    </div>
    <div class="form-group col-md-6">
      <label for="hour">Heure</label>
      <input placeholder="H:M:S" type="time" class=" inputer form-control "  id="hour" name="hour"  >

    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Car-Model">{{ __("Car's Model") }}</label>

      @if($car->model != null)
      <input type="text" class=" inputer form-control " value="{{$car->model}}"  id="Car-Model" placeholder="eg:Toyota Land Cruiser" name="carmodel">
      @else
      <input type="text" class=" inputer form-control "  id="Car-Model" placeholder="eg:Toyota Land Cruiser" name="carmodel">
      @endif

    </div>
    <div class="form-group col-md-3">
      <label for="color">{{__('Color') }}</label>

      @if($car->color != null)
      <input type="text" value="{{$car->color}}" class=" inputer form-control " placeholder="eg:black"  id="color" name="color">
      @else
      <input type="text" class=" inputer form-control " placeholder="eg:black"  id="color" name="color">
      @endif
    </div>
    <div class="form-group col-md-3">
      <label for="kg">{{__('Kg Per person') }} </label>
      <input type="number" min="0" class=" inputer form-control " name="kg"  id="kg" placeholder="how many kg per peron ">

    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="price">
        <b> {{__('Price') }}</b>
      </label><input type="number" name="price" placeholder="eg: 3500" class=" inputer form-control "  id="price">

    </div>
    <div class="form-group col-md-6"> 
      <label for="place">
        <b> {{__('Number of sites') }}</b>
      </label><input type="number" min="1" placeholder="nombre de places disponibles" name="sites" class=" inputer form-control "  id="place">

    </div>
  </div>


</div>









<div class="tab" >

 <h6 class="text-center text-white text-uppercase pt-2"><b>{{__('Personal Infos') }}:<b></h6>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">
       {{__('Surname') }}
     </label>
     <div class="form-holder">
       @if($userInfos->FisrtName!=null)
       <input value="{{ $userInfos->FisrtName }}" type="text" id="fname" placeholder="fisrt name"  name="fname"   class="inputer form-control">
       @else
       <input type="text" id="fname" placeholder="fisrt name"  name="fname"   class="inputer form-control">
       @endif
     </div>
   </div>

   <div class="col-xl">
    <label for="lname">
      {{ __('Given names') }}
    </label>
    <div class="form-holder">
     @if($userInfos->LastName!=null)
     <input value="{{ $userInfos->LastName }}" type="text" id="lname"  placeholder="given name" name="lname"  class="inputer form-control">
     @else
     <input  type="text" id="lname"  placeholder="given name" name="lname"  class="inputer form-control">

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
    <input id="city" value="{{ $userInfos->city }}" placeholder="city" name="city"  type="text" class="form-control">
    @else
    <input id="city" placeholder="city" name="city"  type="text" class="form-control">
    @endif
    
  </div>
</div>
<div class="form-group col-md-6">
  <label for="quater">
   {{__('Quater') }}
 </label>
 <div class="form-holder">
   @if($userInfos->quater!=null) 
   <input value="{{ $userInfos->quater }}" id="quater" name="quater" placeholder="quater"  type="text" class="form-control " >
   @else
   <input id="quater" name="quater" placeholder="quater"  type="text" class="form-control " >
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
     <input value="{{ $userInfos->IdCard }}" id="idnum"  name="idcard" placeholder="id card number" type="text" class="form-control">
     @else
     <input id="idnum"  name="idcard" placeholder="id card number" type="text" class="form-control">
     @endif
   </div>
 </div>
 <div class="form-group col-md-6">
  <label for="driving">
    {{ __('Driving Licence') }}
  </label>
  <div class="form-holder">
    @if($userInfos->DriverLicenceNumber!=null)
    <input value="{{ $userInfos->DriverLicenceNumber }}" id="driving" name="idlicence" placeholder="driving licence number" type="text" class="form-control " >
    @else
    <input id="driving" name="idlicence" placeholder="driving licence number" type="text" class="form-control " >
    @endif

  </div>
</div>
</div>



<div class="form-row ">
  <div class="form-group col-md-6">
    <label for="email">
      {{__('email') }}
    </label>
    <div class="form-holder">

      <input disabled id="email" value="{{Auth::user()->email}}" type="email" class="form-control">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="phone">
     {{__('Phone') }}
   </label>
   <div class="form-holder">
    @if($userInfos->phone1!=null)
    <input value="{{ $userInfos->phone1 }}" placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone"   type="tel" class="form-control " >
    @else
    <input placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone"   type="tel" class="form-control " >
    @endif
  </div>
</div>
</div>



<div class="row">

 <div class="col-md-4">
  <label for="phone">
   {{__('Whatssap number') }}
 </label>
 <div class="form-group">
  @if($userInfos->phoene2!=null)
  <input value="{{ $userInfos->phone2 }}" placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone2"   type="tel" class="form-control " >
  @else
  <input placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone2"   type="tel" class="form-control " >
  @endif
</div>
</div>
<div class="col-md-4">
  <label for="sexe">
    {{__(' Gender') }}
  </label>
  <div class="form-group">
    <select id="sexe" class="form-control" name="gender"  >
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

   <input value="{{ $userInfos->DOB }}" type="text" name="dob" class=" inputer form-control datepicker-here" placeholder="yyyy-mm-dd" data-language='en' data-date-format="yyyy-mm-dd" id="DOB">
   @else
   <input type="text" name="dob" class=" inputer form-control datepicker-here" placeholder="yyyy-mm-dd" data-language='en' data-date-format="yyyy-mm-dd" id="DOB">

   @endif
   


 </div>
</div>


</div>



</div>












<div style="overflow:auto;">
  <div style="float:right;">
    <button class="btn-info btn-sm" type="button" id="prevBtn" onclick="nextPrev(-1)"> {{__(' Previous') }}</button>
    <button class="btn-info btn-sm" type="button" id="nextBtn" onclick="nextPrev(1)"> {{__(' Next') }}</button>
  </div>
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


<script src="{{asset('js/ride-registration.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/datepicker.js')}}"></script>
<script src="{{asset('js/datepicker.en.js')}}"></script>
<script >
  $('#Departure-Date').datepicker({
    language: 'en',
    minDate: new Date() // Now can select only dates, which goes after today
  })
</script>

@endsection