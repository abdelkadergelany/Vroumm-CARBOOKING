@extends('layouts.dashboard-template')


@section('title')
vroumm-offered-rides
@endsection

@section('bookedride')
text-success
@endsection

@section('content')


<!-- Page Content  -->

<div class="row">
  <div class="col-sm-6"></div>
  <div class="col-sm-4">



    <div class="employees">
      <p class="counter-count">{{$count}} </p>
      <p class="employee-p">{{ __('Offered Rides') }}</p>
    </div>


  </div>
  <div class="col-sm-2"></div>
</div>


 @foreach($bookedrides as $bookedride)
<div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

 <div class="container  text-center">

   <h5> {{getDater($bookedride->RideId)}}  &nbsp;     {{getTimer($bookedride->RideId)}} </h5> </h5>
   <span class="">{{getFrom($bookedride->RideId)}}</span> <span><sub> <i class="p-2 fa fa-long-arrow-right fa-3x" aria-hidden="true"></i> </sub></span> <span class="">{{getTo($bookedride->RideId)}}</span>


   <div class="row">
     <a href="{{ route('ride-details') }}?id={{$bookedride->RideId}}&v=951159951159" class=" view-detail-btn"><button class=" btn btn-sm btn-info">{{ __('View Details') }}</button>  </a>&nbsp;&nbsp;

       
       
       @if(getDater($bookedride->RideId) < now())
     <span>{{ __('completed') }}  </span>
     @endif
   </div>

 </div>
</div>
@endforeach






<nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
<!--   <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
  </ul> -->
  {{ $bookedrides->links() }}
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

@endsection