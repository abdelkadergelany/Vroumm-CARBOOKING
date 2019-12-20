<section class="roberto-testimonials-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">

                <div class="testimonial-thumbnail owl-carousel mb-70">


                            

                      @foreach($testimonial=getTestimonial() as $testim)
 
                     <img src={{asset("storage/testimonial_photos/$testim->photo_name")}} alt="Testimonial picture">
                 
                     @endforeach


                </div>
            </div>

            <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h6>{{ __('Testimonials') }}</h6>
                    <!-- <h2>Our Customers</h2> -->
                </div>
                <!-- Testimonial Slide -->
                <div class="testimonial-slides owl-carousel mb-100">

         
                       @foreach($testimonial=getTestimonial() as $testim)

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <h5>“{{$testim->testimonial_message}}”</h5>
                        <div class="rating-title">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h6>{{$testim->name}} <span>{{$testim->profession}}</span></h6>
                        </div>
                    </div>


                      @endforeach


              
                </div>
            </div>
        </div>
    </div>
</section>