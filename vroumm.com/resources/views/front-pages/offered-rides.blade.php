@extends('layouts.dashboard-template')


@section('title')
vroumm-offered-rides
@endsection


@section('offeredride')
text-success
@endsection

@section('content')


<!-- Page Content  -->
<div class="row">
  @if(Session::has('flashmessage'))

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!! Session('flashmessage')!!}</strong> 
  </div> 

  @endif

</div>

<div class="row">
  <div class="col-sm-6"></div>


<div class="col-sm-4">

  <div class="employees">
    <p class="counter-count">{{$count}} </p>
    <p class="employee-p">{{ __('Offered Rides') }}</p>
  </div>
</div>
<div class="col-sm-2"> </div>
</div>


@foreach($rides as $ride)
<div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

 <div class="container-fluid  text-center">

   <h5> {{ \Carbon\Carbon::parse($ride->DepartureDate)->format('j F, Y') }}&nbsp;{{$ride->DepartureTime}} </h5>
   <span class="">{{$ride->From}}</span> <span><sub> <i class="p-2 fa fa-long-arrow-right fa-2x" aria-hidden="true"></i> </sub></span>
   <span class="">{{$ride->To}}</span>


   <div class="row">
     <a href="{{ route('ride-details') }}?id={{$ride->id}}&v=951159951159" class=" view-detail-btn"><button class=" btn btn-sm btn-info">{{ __('View Details') }}</button>  </a>&nbsp;&nbsp;

     @if(($ride->DepartureDate > now()) &&($ride->passenger==0) )
     <a href="#" class=" view-detail-btn"><button class=" btn btn-sm btn-danger">{{ __('cancel') }}</button>  </a>&nbsp;&nbsp;
     @endif

     @if($ride->DepartureDate < now())
     <span>{{ __('completed') }}  </span>
     @endif
   </div>

 </div>
</div>
@endforeach






<nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">

  {{ $rides->links() }}
</nav>








@endsection

@section('morescript')

<script type="text/javascript">
 $('.counter-count').each(function () {
  $(this).prop('Counter',0).animate({
    Counter: $(this).text()
  }, {
    duration: 5000,
    easing: 'swing',
    step: function (now) {
      $(this).text(Math.ceil(now));
    }
  });
});
</script>
@include('flashy::message')
@endsection
