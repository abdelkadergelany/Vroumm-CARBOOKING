<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
     
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset("img/axe-douala.png")}});" data-img-url="img/axe-douala.png">                           
            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInLeft" data-delay="250ms">{{ __('for inter urban transport in Cameroon') }} </h6>
                                <h2 data-animation="fadeInLeft" data-delay="500ms">{{ __('WELCOME TO VROUMM SERVICES') }}</h2>
                                <a href="{{ route('home') }}" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">{{ __('FIND A RIDE NOW') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset("img/yaounde.jpg")}});" data-img-url="img/yaounde.jpg">
            <!-- Welcome Content -->          
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="200ms">{{ __('Tell us where you want to go') }}</h6>
                                <h2 data-animation="fadeInUp" data-delay="550ms">{{ __('Choose your destination and the car that suits you best') }} </h2>
                                <a href="{{route('about')}}" class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms">
                                {{ __('Discover Our Services') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset("img/driver.jpg")}});" data-img-url="img/driver.jpg">
                                                 
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInLeft" data-delay="250ms">{{ __('Do You Have a Car?') }} </h6>
                                <h2 data-animation="fadeInLeft" data-delay="500ms">{{ __('Register And Offer a Ride') }}</h2>
                                <a href="{{ route('register') }}" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">{{ __('Rgister here') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </section>