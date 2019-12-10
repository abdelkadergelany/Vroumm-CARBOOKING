@extends('layouts.dashboard-template')


@section('title')
vroumm-picture
@endsection


 @section('morefiles') 

     <link rel="stylesheet" href="{{asset('css/uploadpict.css')}}"> 
     
 
@endsection


@section('photo')
text-success
@endsection


@section('content')


  <!-- Page Content  -->
   
               
                     <h3 class="text-capitalize">{{ __('Change your profile picture') }}</h3>
                     @if ($errors->any())
                      @error('image') <p> {{__('Image Not accepted.please change the picture and try again') }} </p> @enderror
                     @endif
                    <div class="form-row">
                        <div class="col-xl">


                         <div class="container">
                            <div class="col-md-12">

                                <form method="POST" action="{{ route('photo') }}" enctype="multipart/form-data" >@csrf
                                <div class="form-group">
                                    <label for="imgInp" > {{ __('Upload Image') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-success btn-file">
                                                {{ __('Browse') }}… <input required type="file" name="image" accept="image/png, image/jpeg, image/gif" id="imgInp">
                                            </span>
                                        </span>
                                        <input id='urlname'type="text" class="form-control" readonly>
                                    </div>
                                    <button id="clear" class="btn btn-danger">Clear</button>
                                    <img id='img-upload'/>
                                </div>
                                <div class="input-group">
                                   <input type="submit"  value="{{ __('Upload') }}" class="btn-info form-control"> 
                                </div>
                               
                                </form>
                            </div>
                        </div>


                    </div>



         

                </div><br>






@section('morescript')


<script src="{{asset('js/uploadpict.js')}}"></script>
@include('flashy::message')


@endsection



      


@endsection