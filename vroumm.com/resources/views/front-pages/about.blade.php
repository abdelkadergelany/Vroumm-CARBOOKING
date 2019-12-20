@extends('layouts.app')


@section('title')
vroumm-About
@endsection

@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('About Us') }}

@endslot

@slot('current_page_bread_crumb')
{{ __('About Us') }}
@endslot

@endcomponent

@endsection


@section('content')



<section class="roberto-about-us-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-thumbnail pr-lg-5 mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <img src={{asset("img/biglog1.png")}} alt="">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="text-center">{{ __('Who are we?') }}</h6>
                    <!--  <h2>20 Years Of Experienc</h2> -->
                </div>
                <div class="about-content mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <p class="text-center">{{ __('VROUMM puts you in touch with more than 2000 private drivers, for more than 6000 destinations available everywhere in Cameroon') }}</hp>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="text-center">{{ __('What are we doing?') }}</h6>
                    <!--  <h2>20 Years Of Experienc</h2> -->
                </div>
                <div class="about-content mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <p class="text-center">{{ __('Vroumm takes you Everywhere you go') }} </p>
                    <p class="text-center">{{ __('We offer various destinations across Cameroon. With over 2000 Cars connected  for a perfect journey no matter where your destination is') }}</p>

                </div>
            </div>

            <div class="col-md-6">
                <div class="about-thumbnail pr-lg-5 mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <img src={{asset("img/cmr.png")}} alt="">   
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-thumbnail pr-lg-5 mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <img src={{asset("img/biglog1.png")}} alt="">
                </div> 
            </div>
            <div class="col-md-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="text-center">{{ __('How it works?') }}</h6>
                    <!--  <h2>20 Years Of Experienc</h2> -->
                </div>
                <div class="about-content mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <p class="text-center">{{ __('Very Simple just Give us your destination and we will find all drivers beside you. Then login or create your account to book for the driver that best suit you. once the driver accept your booking we notify you by email') }}</p>

                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="text-center">{{ __('Are you a driver or do you have your personal car?') }}</h6>
                    <!--  <h2>20 Years Of Experienc</h2> -->
                </div>
                <div class=" about-content mb-100 wow fadeInUp" data-wow-delay="500ms">

                    <p class="text-center">{{ __('Register in less than 2 minutes and propose a ride. we will notify you by email once a passenger book for your ride') }}</p>

                </div>
            </div>

            <div class="col-md-6">
                <div class="about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <img src={{asset("img/caravatar.png")}} alt="">
                </div>    
            </div>
        </div>
    </div>
</section>






@component('components.video-area-component')
@slot('pictname')
paralax.jpg
@endslot
@endcomponent


@component('components.paralax-form-component')

@endcomponent



@endsection
