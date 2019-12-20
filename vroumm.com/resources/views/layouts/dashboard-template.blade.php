<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    
    <title> @yield('title')</title>

    
    <!-- All required CSS files -->
    @component('components.css-linked-component')
    @endcomponent
    <link rel="stylesheet" href="css/sidebarstyle.css">
    @yield('morefiles')

</head>
<body>
    @component('components.header-component')

    @endcomponent



    @component('components.featured-image-component')

    @slot('current_page')
    {{ __('Profile') }}

    @endslot

    @slot('current_page_bread_crumb')
    {{ __('Profile') }}
    @endslot

    @endcomponent



    <br>
    <div class="container side" >
        <br>
        <h1 class="text-center text-capitalize">{{ __('My account') }}</h1>
        <hr><br>

        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                   <figure>
                    <img src="thumbnail/{{getProfilePict(Auth::user()->id)}}" class="rounded-circle" alt="" width="150" height="150">
                    <figcaption class="font-weight-bolder ">{{Auth::user()->name}}</figcaption>
                </figure>
            </div>

            <ul class="list-unstyled components">

             <li class="@yield('profile')">
                <a   href="{{ route('profiler'
                    ) }}">Profile</a>
                </li>
                
                <li class="@yield('photo')">
                    <a href="{{ route('photo'
                        ) }}">Photo</a>
                    </li>
                    <li class="@yield('mycar')">
                        <a href="{{ route('mycar'
                            ) }}"> {{ __('My Car') }}</a>
                        </li>

                        <li class="@yield('offeredride')">
                            <a href="{{ route('offered-rides'
                                ) }}">{{ __('Offered Rides') }}</a>
                            </li>
                            <li class="@yield('bookedride')">
                                <a href="{{ route('booked-rides') }}">{{ __('Booked Rides') }}</a>
                            </li>
                            <li class="@yield('notification')">
                                <a href="{{ route('notifications'
                                    ) }}">{{ __('Notifications') }}</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled CTAs">
                                <li>
                                    <a href="{{ route('logout'
                                        ) }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="download">{{ __('Logout') }}</a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </nav>

                            <!-- Page Content  -->
                            <div id="content">

                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <div class="container-fluid">

                                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                                            <i class="fa fa-align-left"></i>

                                            <span>Toggle Sidebar</span>
                                        </button>
                                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <i class="fa fa-align-justify"></i>
                                        </button>

                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="nav navbar-nav ml-auto">
                                                <li class="nav-item active">
                                                    <a  class=" nav-link" href="{{ route('offer-ride'
                                                        ) }}">{{ __('Offer a ride') }}</a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="{{ route('find-ride'
                                                            ) }}">{{ __('Find a ride') }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>

                                        <div class="container-fluid" >



                                            <section class="m-sm-auto">




                                             @yield('content')




                                         </section>
                                     </div>

                                 </div>
                             </div>



                         </div>










                         @component('components.partenar-component')

                         @endcomponent

                         @component('components.footer-component')

                         @endcomponent
                         @component('components.js-linked-component')
                         @endcomponent
                         @yield('morescript')




                         <script src="{{asset('js/datepicker.js')}}"></script>
                         <script src="{{asset('js/datepicker.en.js')}}"></script>

                         <script type="text/javascript">
                            $(document).ready(function () {
                                $('#sidebarCollapse').on('click', function () {
                                    $('#sidebar').toggleClass('active');
                                });
                            });
                        </script>



                    </body>
                    </html>
