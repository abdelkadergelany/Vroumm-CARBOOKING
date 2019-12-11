@extends('layouts.dashboard-template')


@section('title')
vroumm-myCar
@endsection


@section('mycar')
text-success
@endsection


@section('content')


<!-- Page Content  -->

@if ($errors->any())
<div class="alert alert-danger">
  <p>{{__('please review the form and correct the following errors') }}:</p>
  <ul> 
    @error('carmodel') <p>{{ __("Car's Model") }} incorrect</p> @enderror
    @error('color') <p>{{__("Car's Color") }} incorrect</p> @enderror
    @error('immat') <p>{{__("Immatriculation") }} incorrect</p> @enderror


  </ul>
</div>
@endif

<h3 class=" text-capitalize">{{ __('My Car') }}</h3>
<div class="form-row">
  <div class="col-xl">


   <div class="container-fluid">
    <div class=" col-md-12">

      <div class=" single-room-area  d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" style="border-bottom: solid;" >

       <div class="container  ">



        <div class="row">
          <div class="col-xs-6">
            <figure>
              <img src="img/caravatar.png" class="rounded-circle" alt="" width="300" height="300">
              <figcaption class="font-weight-bolder"></figcaption>
            </figure>
          </div>
          <div class="col-xs-6  m-auto" >
            <span class="text-gray-dark">{{ __("Car's Model") }} :</span>
            <h4 class="text-capitalize">

             @if($car->model!=null)
             {{$car->model}}
             @endif

           </h4>
           <span class="text-gray-dark">Immatriculation :</span><h4 class="text-capitalize">


             @if($car->immatriculation!=null)
             {{$car->immatriculation}}
             @endif

           </h4>
           <span class="text-gray-dark">{{ __('Color') }} :</span><h4 class="text-capitalize">


             @if($car->color!=null)
             {{$car->color}}
             @endif

           </h4>
         </div>


       </div>



       <div class="row">
         <a href="#" class=" view-detail-btn"><button class="btn btn-sm btn-info"
          data-title="add" data-toggle="modal" data-target="#add" id="buttonAdd">{{ __('Modify') }}</button>  </a>
        </div>

      </div>
    </div>


  </div>
</div>
</div>










<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
    <form action="{{ route('mycar') }}" method="POST" >@csrf

     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
      <h4 class="modal-title custom_align text-capitalize" id="Heading">{{ __("Modify Your Car's information") }}</h4>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label for="carmodel" id="editForm">{{ __("Car's Model") }}: </label>


        @if($car->model!=null)
        <input class="form-control" type="text" value="{{$car->model}}" id="carmodel" name="carmodel" required >
        @else
        <input class="form-control" type="text"  id="carmodel" name="carmodel" required >
        @endif


      </div>
      <div class="form-group">
        <label for="immat" id="editForm">Immatriculation: </label>
        @if($car->immatriculation!=null)
        <input class="form-control" value="{{$car->immatriculation}}" type="text"  id="immat" name="immat" required >
        @else
        <input class="form-control"  type="text"  id="immat" name="immat" required >
        @endif
      </div>
      <div class="form-group">

        <label for="color" id="editForm">{{ __("Car's Color") }}: </label>
        @if($car->color!=null)
        <input class="form-control" value="{{$car->color}}" type="text"  id="color" name="color" required >
        @else
        <input class="form-control" type="text"  id="color" name="color" required >
        @endif
      </div>

    </div>
    <div class="modal-footer ">
      <input type="submit" class="btn btn-info
      btn-lg form-control" value="Update"><span class="glyphicon glyphicon-ok-sign" ></span> 
    </div>
  </form>
</div>
<!-- /.modal-content --> 
</div>
<!-- /.modal-dialog --> 
</div>





</div><br>




@endsection


@section('morescript')


@include('flashy::message')


@endsection