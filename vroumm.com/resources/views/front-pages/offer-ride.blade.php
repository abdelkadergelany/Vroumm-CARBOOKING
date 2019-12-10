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
          @error('lname') <p> {{__('Surname') }} incorrect</p> @enderror
          @error('fname') <p>{{ __('Given names') }} incorrect</p> @enderror
          @error('phone') <p>{{ __('whatsapp phone number is invalid') }} </p> @enderror
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
   <!--  <label for="hour">Heure</label>
    <select   id="hour" class=" inputer form-control" name="hour">
     <option value="00">00 H</option>
      @for($i=1;$i<=23;$i++)
      <option value="{{$i}}">{{$i}} H</option>
      @endfor
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="min">Min </label>
    <select id="min" class=" inputer form-control" name="min">
     <option value="00">00 Min</option>
     @for($i=1;$i<=59;$i++)
      <option value="{{$i}}">{{$i}} Min</option>
      @endfor
    </select> -->
  </div>
</div>


<div class="form-row">
  <div class="form-group col-md-6">
    <label for="Car-Model">{{ __("Car's Model") }}</label>
    <input type="text" class=" inputer form-control "  id="Car-Model" placeholder="eg:Toyota Land Cruiser" name="carmodel">
    
  </div>
  <div class="form-group col-md-3">
    <label for="color">{{__('Color') }}</label>
    <input type="text" class=" inputer form-control " placeholder="eg:black"  id="color" name="color">
    
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

      <input type="text" id="fname" placeholder="fisrt name"  name="fname"   class="inputer form-control">
      
    </div>
  </div>

  <div class="col-xl">
    <label for="lname">
      {{ __('Given names') }}
    </label>
    <div class="form-holder">

      <input type="text" id="lname"  placeholder="given name" name="lname"  class="inputer form-control">
      
    </div>
  </div>




</div>




<div class="form-row ">
  <div class="form-group col-md-6">
    <label for="city">
     {{__('City') }}
   </label>
   <div class="form-holder">

    <input id="city" placeholder="city" name="city"  type="text" class="form-control">
    
  </div>
</div>
<div class="form-group col-md-6">
  <label for="quater">
   {{__('Quater') }}
 </label>
 <div class="form-holder">

  <input id="quater" name="quater" placeholder="quater"  type="text" class="form-control " >
  
</div>
</div>
</div>



<div class="form-row ">
  <div class="form-group col-md-6">
    <label for="idnum">
      {{ __('Id Card Number') }}
    </label>
    <div class="form-holder">

      <input id="idnum"  name="idcard" placeholder="id card number" type="text" class="form-control">
      
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="driving">
      {{ __('Driving Licence') }}
    </label>
    <div class="form-holder">

      <input id="driving" name="idlicence" placeholder="driving licence number" type="text" class="form-control " >
      
    </div>
  </div>
</div>



<div class="form-row ">
  <div class="form-group col-md-6">
    <label for="email">
      {{__('email') }}
    </label>
    <div class="form-holder">

      <input  id="email" value="gelany740@gmail.com" type="email" class="form-control">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="phone">
     {{__('Phone') }}
   </label>
   <div class="form-holder">

    <input placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone"   type="tel" class="form-control " >
    
  </div>
</div>
</div>



<div class="row">

 <div class="col-md-4">
  <label for="phone">
   {{__('Whatssap number') }}
 </label>
 <div class="form-group">

  <input placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone2"   type="tel" class="form-control " >

</div>
</div>
<div class="col-md-4">
  <label for="sexe">
    {{__(' Gender') }}
  </label>
  <div class="form-group">
    <select id="sexe" class="form-control" name="gender"  >
      <option value="Male" selected>{{ __(' Male') }}</option>
      <option value="Female"  >{{__(' Female') }}</option>
    </select>

  </div>
</div>
<div class="col-md-4">
  <label for="DOB">
    {{ __(' Date Of Birth') }}
  </label>
  <div class="form-group">



   <input type="text" name="dob" class=" inputer form-control datepicker-here" placeholder="yyyy-mm-dd" data-language='en' data-date-format="yyyy-mm-dd" id="DOB">
   


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