@extends('layouts.app')


@section('title')
Reservation-details
@endsection

@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __("Reservation's details") }}

@endslot

@slot('current_page_bread_crumb')
{{ __("Reservation's details") }}
@endslot

@endcomponent

@endsection


@section('content')
<br><br><br><br><br><br><br><br><hr>
<div class="container">

<table class="table table-striped table-dark">
  <thead>
    <tr>
     <th colspan="2">Details</th>
    </tr>
  </thead>
  <tbody>
   <tr >
        <td >
            {{ __('From') }}
        </td>
            <td>
             {{$ride->From}} 
        </td>
    </tr>
    <tr >
        <td>
            {{ __('To') }}
        </td>
            <td>
             {{$ride->To}} 
        </td>
    </tr>
    <tr >
        <td>
            {{ __('Pick Point') }}
        </td>
            <td>
            {{$ride->PickPoint}} 
        </td>
    </tr>

    <tr >
        <td>
            {{ __('Drop Point') }}
        </td>
            <td>
            {{$ride->DropPoint}} 
        </td>
    </tr>
    <tr >
        <td>
            Date
        </td>
            <td>
              {{ \Carbon\Carbon::parse($ride->DepartureDate)->format('j F, Y') }}
        </td>
    </tr>
    <tr >
        <td>
            {{ __('Time') }}
        </td>
            <td>
              {{$ride->DepartureTime}}
        </td>
    </tr>
    <tr >
        <td>
            {{ __('Driver') }}
        </td>
            <td>
             {{getName($ride->userId)}}
        </td>
    </tr>
        <tr >
        <td>
            {{ __('Phone') }}
        </td>
            <td>
            {{$personalInfo->phone1}}
        </td>
    </tr>

   @if($personalInfo->phone2!=null)
    <tr >
        <td>
            Whatsapp
        </td>
            <td>
             {{$personalInfo->phone2}}
        </td>
    </tr>
    @endif



    <tr >
        <td rowspan="2" >
            {{ __('Car') }}
        </td>
            <td>
          <table>
            <tr>
                <td>{{ __('Model') }}:  {{$ride->CarModel}}</td>
            </tr>
            <tr>
                <td>{{ __('Color') }}: {{$ride->CarColor}}</td>
            </tr>
            <tr >
        <td >
            {{ __('Price') }} : <b>{{$ride->price}} FCFA</b>
        </td>
        
    </tr>
            </table>
        </td>
    </tr>
  </tbody>
</table>

</div>
<br><br><br><br><br><br><br><br><hr>

@component('components.video-area-component')
@slot('pictname')
paralax.jpg
@endslot
@endcomponent


@component('components.paralax-form-component')

@endcomponent



@endsection
