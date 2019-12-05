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
    @component('components.header-component')

    @endcomponent

     

    @yield('featured-image')



    @yield('content')



     @component('components.partenar-component')

    @endcomponent

    @component('components.footer-component')

    @endcomponent
    @component('components.js-linked-component')
    @endcomponent
</body>
</html>
