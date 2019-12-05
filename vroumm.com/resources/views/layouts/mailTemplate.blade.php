<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>fff</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">

         <div class="col-sm-12">
            <figure>
              <img src="https://vroumm.000webhostapp.com/img/bg-img/biglog1.png" alt="Trulli" 
              style="width:20%">
              <figcaption><h3 class="text-center badge badge-success">Vroum: Online Car Booking In Cameroon</h3></figcaption>
          </figure>
         </div>
      </div>

      <div class="text-center row">
        <div class="col-sm-12"><h1>{{$data['title']}}</h1></div>
        <div class="col-sm-12">{{$data['message']}}</div>
            
        </div>
          
      </div>
  </div>

</body>
</html>
