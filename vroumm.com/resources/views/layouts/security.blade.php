<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    
    <title> @yield('title')</title>

    @yield('morefiles')
    <!-- All required CSS files -->
    @component('components.css-linked-component')
    @endcomponent

</head>
<body>
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(http://trojanhunt.com/img/artwork/compass-needle-pointing-the-word-security-concept.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Vroum</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page"></li>
                                <!-- <li class="breadcrumb-item active" aria-current="page">About Us</li> -->
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

     

    @yield('featured-image')



    @yield('content')


  <div class="roberto--video--area bg-img bg-overlay jarallax section-padding-0-100" style="background-image: url(https://api.cobalt.com/social/1.0/image/caravatar.png}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center white wow fadeInUp" data-wow-delay="100ms">
                        <h6>{{ __('Ultimate Solution For Inter Urban Transport') }}</h6>
                        <h2>VROUMM</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div><br><br><br>
    




  

    @component('components.footer-component')

    @endcomponent
    @component('components.js-linked-component')
    @endcomponent
</body>
</html>
