

@extends('layouts.app')


@section('title')
vroumm-Register
@endsection


@section('morefiles')

<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection



@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
 {{ __('Register') }}

@endslot

@slot('current_page_bread_crumb')
 {{ __('Register') }}
@endslot

@endcomponent

@endsection




@section('content')
<br><br><hr>

 <div class="container">
        <div class=" cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset("img/1.jpg")}});">
          <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <h5 class="card-title text-center">{{ __('Create Your Account') }}</h5>
                    <form class="form-signin">
                     <div class="form-label-group">


            



                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" 
                        value="{{ old('name') }}" required autofocus autocomplete="name" name="name">
                        <label for="name">{{ __('Name') }}</label>

                                  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror




                    </div>

                    <div class="form-label-group">



            



                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required  value="{{ old('email') }}" autocomplete="email" autofocus name="email">
                        <label for="email">{{ __('Email address') }}</label>

                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-label-group">


  


                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password" name="password">
                        <label for="password">{{ __('Password') }}</label>

                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                    </div>

                    <div class="form-label-group">




                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Retype your Password" required autocomplete="new-password">
                        <label for="password-confirm">{{ __('Password') }}</label>
                    </div>

                   
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Register') }}</button>
                    <hr class="my-4">
                 

                    <a href="{{ url('login/google') }}"><button style="background-color: #ea4335;" class="btn btn-lg btn-google btn-alert btn-block text-capitalize" type="button"><i class="fa fa-google mr-2"></i> {{ __('Register with Google') }}</button></a><br>
             <a href="{{ url('login/facebook') }}"><button style="background-color: #3b5998;" class="btn btn-lg btn-facebook btn-block text-capitalize" type="button"><i class="fa fa-facebook mr-2" aria-hidden="true"></i>  {{ __('Register with Facebook') }}</button><a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div><br><br><br><br><br><br>






@component('components.video-area-component')
@slot('pictname')
paralax.jpg
@endslot
@endcomponent


@component('components.paralax-form-component')

@endcomponent



@endsection

