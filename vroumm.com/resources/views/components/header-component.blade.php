  <!-- Preloader -->
  <div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->

<!-- Header Area Start -->
<header class="header-area">
    <!-- Search Form -->
    <div class="search-form d-flex align-items-center">
        <div class="container">
           <!--  <form action="#" method="get">
                <input type="search" name="search-form-input" id="searchFormInput" placeholder="Enter your destination ...">
                <button type="submit"><i class="icon_search"></i></button>
            </form> -->
        </div>
    </div>

    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">

                <div class="col-4">
                    <div class="top-header-content">
                        <a href="#"><i class="icon_phone"></i> <span> 661 14 48 46 </span></a>
                        <a href="mailto:vroumm@gmail.com.com?Subject=Vroumm%Visitor" target="_blank">
                            <i class="icon_mail"></i> <span>vroumm@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-8">


                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                @guest
                                <a href="{{ route('login') }}"><i class="fa fa-unlock-alt" > {{ __('Login') }} </i></a>
                                <a href="{{ route('register') }}"><i class="fa fa-user-plus" > {{ __('Register') }} </i></a>
                                @endguest

                                @auth

                                <div class="btn-group ">
                                    <button style="background-color: #0e2737" type="button" class="btn btn-lg "><span style="color: white">{{ Auth::user()->name }}</span></button>
                                    <button style="background-color: #17a2b8;" type="button" class="btn   dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                 <div class="dropdown-menu">
                                        <br><br><br><br>
                                     <a style="color: black!important;" class=" drop-item-auth   
                                          dropdown-item " href="{{ route('profile') }}"><i class="fa-2x fa fa-home"
                                           aria-hidden="true"></i>  {{ __('My Account') }}
                                     </a>

                                        <div class="dropdown-divider"></div>
                                     <a style="color: black!important" class="drop-item-auth dropdown-item"   href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa-2x fa fa-sign-out" aria-hidden="true"></i>
                                            
                                          {{ __('Logout') }}
                                     </a>

                                 </div>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @endauth
                                
                            </div>

                        </div>
                        


                        
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="{{ url('/') }}"><img src="img/logo-slogan.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                    <li><a href="{{ route('find-ride') }}">{{ __('Find a ride') }} </a></li>
                                    <li><a href="{{ route('offer-ride') }}">{{ __('Offer a ride') }}</a></li>
                                    
                              
                                    <li><a href="{{route('about')}}">{{ __('About Us') }}</a></li>

                                    <li><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                                </ul>

                             

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    
                                       @if(App::isLocale('fr'))
                                        <a href="{{route('language')}}?lang=en"> ENGLISH  <i class="fa fa-long-arrow-right"  
                                             aria-hidden="true"></i>
                                        </a>
                                        @endif
                                         @if(App::isLocale('en'))
                                        <a href="{{route('language')}}?lang=fr"> FRENCH  <i class="fa fa-long-arrow-right"  
                                             aria-hidden="true"></i>
                                        </a>
                                        @endif
                                        
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>