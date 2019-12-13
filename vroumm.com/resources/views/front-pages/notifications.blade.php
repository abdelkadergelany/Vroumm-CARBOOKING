@extends('layouts.dashboard-template')


@section('title')
vroumm-notifications
@endsection


@section('notification')
text-success
@endsection

@section('content')


<!-- Page Content  -->







 <div class="container-fluid ">
  



<div class="list-group">
@forelse($notifications as $not)
@if($not->data['type']=='confirmation')

@if($not->read_at==null)
<a target="_blank" href="{{route('see_details')}}?rideId={{$not->data['rideId']}}&bookingId={{$not->data['bookingId']}}" class="list-group-item list-group-item-action font-weight-bold border-warning "><i  class="fa fa-bell " aria-hidden="true"></i>&nbsp;&nbsp; 
 {{__('Booking confirmation')}} {{__('for the ride')}} <span class="text-info">{{getFrom($not->data['rideId'])}}-{{getTo($not->data['rideId'])}}
 </span> <br><span class="text-secondary">{{getDater($not->data['rideId'])}}  &nbsp;     {{getTimer($not->data['rideId'])}}</span></a>
 @endif

 @if($not->read_at!=null)
<a target="_blank" href="{{route('see_details')}}?rideId={{$not->data['rideId']}}&bookingId={{$not->data['bookingId']}}" class="list-group-item list-group-item-action  "><i  class="fa fa-bell " aria-hidden="true"></i>&nbsp;&nbsp; 
 {{__('Booking confirmation')}} {{__('for the ride')}} <span class="text-info">{{getFrom($not->data['rideId'])}}-{{getTo($not->data['rideId'])}}
 </span> <br><span class="text-secondary">{{getDater($not->data['rideId'])}}  &nbsp;     {{getTimer($not->data['rideId'])}}</span></a>
 @endif

  @endif



 @if($not->data['type']=='request')
 @if($not->read_at==null)
<a target="_blank" href="{{route('bookrideconfirmationCallback')}}?RideId={{$not->data['rideId']}}&bookingId={{$not->data['bookingId']}}" class="list-group-item list-group-item-action font-weight-bold border-warning"><i  class="fa fa-bell " aria-hidden="true"></i>&nbsp;&nbsp; 
 {{__('Booking request')}} {{__('for the ride')}} <span class="text-info">{{getFrom($not->data['rideId'])}}-{{getTo($not->data['rideId'])}}
 </span> <br><span class="text-secondary">{{getDater($not->data['rideId'])}}  &nbsp;     {{getTimer($not->data['rideId'])}}</span></a>
 @endif

  @if($not->read_at!=null)
<a target="_blank" href="{{route('bookrideconfirmationCallback')}}?RideId={{$not->data['rideId']}}&bookingId={{$not->data['bookingId']}}" class="list-group-item list-group-item-action disabled"><i  class="fa fa-bell " aria-hidden="true"></i>&nbsp;&nbsp; 
 {{__('Booking request')}} {{__('for the ride')}} <span class="text-info">{{getFrom($not->data['rideId'])}}-{{getTo($not->data['rideId'])}}
 </span> <br><span class="text-secondary">{{getDater($not->data['rideId'])}}  &nbsp;     {{getTimer($not->data['rideId'])}}</span></a>
 @endif

 @endif
@empty

<a href="#" class="list-group-item list-group-item-action font-weight-bold border-warning"><i  class="fa fa-bell " aria-hidden="true"></i>&nbsp;&nbsp;{{__('No notification')}}</a>
@endforelse


 


</div>

 </div>








<nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">

 
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
