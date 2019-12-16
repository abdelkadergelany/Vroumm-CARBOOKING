<footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="img/logo3.png" alt="vroumm logo"></a>

                            <h4>+237 6 614 48 46</h4>
                            <span>vroummcarbooking@gmail.com</span>
                            <span>Yaounde bastos POBOX 814</span>
                        </div>
                    </div>

                   
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="{{route('about')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> 
                                {{ __('About Us') }}</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>
                                {{ __('Contact') }} </a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>
                                {{ __('Terms and Conditions') }} </a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>
                                {{__('FAQs') }} </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">{{__('Subscribe Newsletter') }}</h5>
                            <span>{{__('Subscribe our newsletter to get notification about new updates') }}</span>

                            <!-- Newsletter Form -->
                            <form action="#" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        
                        <div class="copywrite-text">
                            <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                                {{__('All rights reserved Vroumm') }} 

                                
                            </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>