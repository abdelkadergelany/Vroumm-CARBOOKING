@extends('layouts.app')


@section('title')
find-rides
@endsection

@section('morefiles')


<link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}"> 

@endsection


@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('Find a ride') }}

@endslot

@slot('current_page_bread_crumb')
{{ __('Find a ride') }}
@endslot

@endcomponent

@endsection


@section('content')



<div class="roberto-rooms-area section-padding-100-0">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <!-- Single Room Area -->








        @forelse ($rides as $ride)

        <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

         <div class="container  ">


           <div class="row ">
             <div  class="col-xs-12">
               <span> {{ __('Driver') }}  </span><br>
               <figure>
                <img src="thumbnail/{{getProfilePict($ride->userId)}}" class="rounded-circle" alt="Cinque Terre" width="70" height="70">
                <figcaption class="text-capitalize"> {{getName($ride->userId)}}</figcaption>
              </figure>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <h6 ><span style="color: #afb4bf;">{{ __('Departure') }}:</span><br> <span>
               {{ \Carbon\Carbon::parse($ride->DepartureDate)->format('j F, Y') }}  &nbsp;     {{$ride->DepartureTime}}</span></h6>
             </div>
             <div class="col-xs-4  m-auto" ></div>
             <div class="col-xs-4" >
              <h6><span style="color: #afb4bf;"></span><br> <span> </span></h6>
            </div>

          </div>
          <div class="row">
            <div class="col-xs-4">
              <h6 ><b> {{$ride->From}}</b> </h6>
            </div>
            <div class="col-xs-4 m-auto" >
              <sup><i class="fa fa-long-arrow-right fa-3x" aria-hidden="true"></i></sup>
            </div>
            <div class="col-xs-4">
              <h6><b> {{$ride->To}}</b></h6>
            </div>

          </div>

          <div class="row">
            <div class="col-xs-4">
              <h6 ><span style="color: #afb4bf;">{{ __('Pick Point') }}:</span><br> <span>{{$ride->PickPoint}} </span></h6>
            </div>
            <div class="col-xs-4 m-auto" ></div>
            <div class="col-xs-4">
              <h6><span style="color: #afb4bf;">{{ __('Drop Point') }}:</span><br> <span>{{$ride->DropPoint}} </span></h6>
            </div>


          </div>
          <div class="row">
           <a href="{{ route('ride-details') }}?id={{$ride->id}}&v=123321654" class=" view-detail-btn"><button class="btn btn-sm btn-info">{{ __('View Details') }}</button>  </a>
         </div>


       </div>
     </div>

     @empty
       <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

         <div class="container  ">


           <div class="row ">
             <div  class="col-xs-12">

               <h5 class="text-danger">oops!!! {{ __('No ride available for now') }}
                     
               </h5><p>{{ __('Use filter for more rides') }}</p>
             </div>
           </div>
           </div>
         </div>

    

     @endforelse




     <!-- Pagination -->
     <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
      <ul class="pagination">
       {{ $rides->links() }}
     </ul>
   </nav>
 </div>

 <div class="col-12 col-lg-4">
  <!-- Hotel Reservation Area -->
  <div class="hotel-reservation--area mb-100">
    <form action="{{ route('find-ride') }}" method="post" class="p-3" style="background-color:lightgrey;
    z-index: 1;
    border-radius: 10px;
    box-shadow:10px 10px grey, -1em 0 .4em grey;">@csrf
    <div class="form-group mb-30">
      <label for="Departure-Date"> {{ __('Filter by Date') }}</label>

      <div class="row no-gutters">
        <div class="col-12">
          <input placeholder="yyyy-mm-dd" type="text" class=" inputer form-control datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" id="Departure-Date" name="departureDate">
        </div>

      </div>

    </div>
    <div class="form-group mb-30">
      <label for="guests">{{ __('Filter by cities') }}</label>
      <div class="row">
        <div class="form-group col-6">
          <label for="first-disabled">{{ __('From') }}</label>
          <select required  id="first-disabled" class="inputer selectpicker form-control" data-hide-disabled="false"
          data-live-search="true" name="From" >
          
          <option selected  >{{$From?? ''}}</option>
         
          @foreach($city=getCities() as $cit)
          <option value="{{$cit->name}}" >{{$cit->name}}</option>
          @endforeach

        </select>
      </div>
      <div class="form-group col-6">
       <label for="second-disabled">{{ __('To') }}</label>
       <select required id="second-disabled" class="inputer selectpicker form-control" data-hide-disabled="false"
       data-live-search="true" name="To" >
      
       <option selected>{{$To?? ''}}</option>

       @foreach($city=getCities() as $cit)
       <option value="{{$cit->name}}"  >{{$cit->name}}</option>
       @endforeach

     </select>
   </div>
 </div>
</div>

<div class="form-group">
  <button type="submit" class="btn roberto-btn w-100">{{ __('Apply Filter') }}</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>







@component('components.video-area-component')
@slot('pictname')
paralax.jpg
@endslot
@endcomponent


@component('components.paralax-form-component')

@endcomponent




@endsection


@section('morescript')



<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/datepicker.js')}}"></script>
<script src="{{asset('js/datepicker.en.js')}}"></script>


@endsection