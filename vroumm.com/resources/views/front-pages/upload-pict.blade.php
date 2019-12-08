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
                    <div class="form-row">
                        <div class="col-xl">


                         <div class="container">
                            <div class="col-md-12">

                                <form accept="#">
                                <div class="form-group">
                                    <label> {{ __('Upload Image') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-success btn-file">
                                                {{ __('Browse') }}… <input type="file" accept="image/png, image/jpeg, image/gif" id="imgInp">
                                            </span>
                                        </span>
                                        <input id='urlname'type="text" class="form-control" readonly>
                                    </div>
                                    <button id="clear" class="btn btn-danger">Clear</button>
                                    <img id='img-upload'/>
                                </div>
                                <div class="input-group">
                                   <input type="submit" name="" value="submit" class="btn-info form-control"> 
                                </div>
                               
                                </form>
                            </div>
                        </div>


                    </div>



         

                </div><br>






@section('morescript')


<script src="{{asset('js/uploadpict.js')}}"></script>


@endsection



      


@endsection