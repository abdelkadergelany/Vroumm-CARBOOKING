
@extends('layouts.app')


@section('title')
vroumm-Login
@endsection


@section('morefiles')

<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection



@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('Login') }}

@endslot

@slot('current_page_bread_crumb')
{{ __('Login') }}
@endslot

@endcomponent

@endsection




@section('content')
<br><br><hr>

<div class="container">
    <div class=" cta-content bg-img bg-overlay jarallax" style="background-image: url(img/1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <form class="form-signin" method="POST" action="{{ route('login') }}"> @csrf
                <h5 class="card-title text-center"> {{ __('Sign In') }}</h5>
                
                  <div class="form-label-group">






                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"   required autofocus autocomplete="email"  name="email" placeholder="Email"> 
                     <label for="email"> {{ __('Email address') }}</label> 


                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                   
                </div>

                <div class="form-label-group">

                    <input placeholder="Password" id="password" type="inputpassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label for="password"> {{ __('Password') }}</label>


                     @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    
                </div>    @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif

                <div class="custom-control custom-checkbox mb-3">
                 <!--  <input type="checkbox" class="custom-control-input" id="customCheck1"> -->
                 <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                 <label class="custom-control-label" for="remember"> {{ __('Remember Me') }}</label>
             </div>
             <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Sign In') }}</button>
             <hr class="my-4">

             <a href="{{ url('login/google') }}"><button style="background-color: #ea4335;" class="btn btn-lg btn-google btn-alert btn-block text-capitalize" type="button"><i class="fa fa-google mr-2"></i> {{ __('Sign in with Google') }}</button></a><br>
             <a href="{{ url('login/facebook') }}"><button style="background-color: #3b5998;" class="btn btn-lg btn-facebook btn-block text-capitalize" type="button"><i class="fa fa-facebook mr-2" aria-hidden="true"></i>  {{ __('Sign in with Facebook') }}</button><a>
         </form>
         <br>
         <div class="text-center text-primary"> {{ __('Not yet refistered?') }} <a class="text-success" href="{{ route('register') }}">
         {{ __('Register Here') }}</a></div>
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




