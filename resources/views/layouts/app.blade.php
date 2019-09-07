<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PHOTOSHOOT</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    {{--  other body contents  --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{url('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('fonts/flaticons/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <div id="app">
         @include('inc.publicnav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
