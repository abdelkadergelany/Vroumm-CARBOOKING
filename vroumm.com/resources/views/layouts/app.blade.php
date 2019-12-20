<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154783628-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154783628-1');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    
    <title> @yield('title')</title>

    


    <!-- All required CSS files -->
    @component('components.css-linked-component')
    @endcomponent
    @yield('morefiles')
  

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

    @yield('morescript')




</body>
</html>
