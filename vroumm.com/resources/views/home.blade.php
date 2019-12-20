@extends('layouts.app')


@section('title')
vroumm-home
@endsection

@section('morefiles')
<link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}"> 

@endsection


@section('content')

@component('components.slider-component')

@endcomponent


<section class="roberto-about-area section-padding-100-0">
    <!-- Hotel Search Form Area -->
    <div class="hotel-search-form-area">
        <div class="container">
            <div class="hotel-search-form">
                @component('components.ride-search-component')

                @endcomponent


            </div>
        </div>
    </div>


<br><br><br><br><br><br>
    @component('components.ride-slider-component')
@endcomponent

    <div class="container mt-100">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                    <h6> {{ __('About Vroumm') }}</h6>
                    <h3>{{ __('Vroumm takes you Everywhere you go') }}</h3>
                </div>
                <div class="about-us-content mb-100">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms">{{ __('We offer various destinations across Cameroon. With over 2000 Cars connected  for a perfect journey no matter where your destination is') }}</h5>

                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="single-thumb" >
                                <div class="text-on-img  " ><h3 class="text-white"><b>Yaounde</b></h3></div>
                                <img src={{asset("img/yaounde.png")}} alt="">
                                  
                            </div>
                            <div class="single-thumb">
                                <div class="text-on-img " ><h3 class="text-white"><b>Douala</b></h3></div>
                                <img src={{asset("img/douala.png")}} alt="">
                            </div>  
                        </div>
                        <div class="col-6">
                            <div class="single-thumb">
                                <div class="text-on-img " ><h3 class="text-white"><b>Buea</b></h3></div>
                                <img src={{asset("img/buea.png")}} alt="">
                            </div> 
                            <div class="single-thumb">
                                <div class="text-on-img " ><h3 class="text-white"><b>Maroua</b></h3></div>
                                <img src={{asset("img/bamenda.png")}} alt="">
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container mt-100">
    <div class="row align-items-center">


        <div class="col-12 col-lg-6">
            <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                <div class="row no-gutters">
                    <div class="col-6">
                        <div class="single-thumb" >
                            <div class="text-on-img  " ><h3 class="text-white"><b>Bamenda</b></h3></div>
                            <img src={{asset("img/bamenda2.png")}} alt="">
                               
                        </div>
                        <div class="single-thumb">
                            <div class="text-on-img " ><h3 class="text-white"><b>Garoua</b></h3></div>
                            <img src={{asset("img/north.png")}} alt="">
                        </div> 
                    </div>
                    <div class="col-6">
                        <div class="single-thumb">
                            <div class="text-on-img " ><h3 class="text-white"><b>Ebolowa</b></h3></div>
                            <img src={{asset("img/ebo.png")}} alt="">
                        </div>
                        <div class="single-thumb">
                            <div class="text-on-img " ><h3 class="text-white"><b>Bertoua</b></h3></div>
                            <img src={{asset("img/bert.png")}} alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="col-12 col-lg-6">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <h6>{{ __('About Vroumm') }}</h6>
                <h3> {{ __('How to use Vroumm?') }}</h3>
            </div>
            <div class="about-us-content mb-100">
                <h5 class="wow fadeInUp" data-wow-delay="300ms">{{ __('Very Simple just Give us your destination and we will find all drivers beside you. Then login or create your account to book for the driver that best suit you. once the driver accept your booking we notify you by email') }}</h5>

            </div>
        </div>

    </div>
</div>




@component('components.reasons-component')
@endcomponent

<br>





@component('components.testimonials-component')
@endcomponent




@component('components.paralax-form-component')

@endcomponent

@endsection




@section('morescript')

<script src="{{asset('js/bootstrap-select.js')}}"></script>

<script type="text/javascript">

   var owl = $('.owl-carousel');
   owl.owlCarousel({
    items:3,
    loop:true,
    margin:5,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});
   $('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
   $('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
});
</script>
@endsection