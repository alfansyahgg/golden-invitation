<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>@yield('title')</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('public/assets/css/templatemo-softy-pinko.css') }}">

    </head>
    
    <body>

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    @yield('footer')

    <!-- MODAL -->
    @yield('modal')

    <!-- jQuery -->
    <script src="{{ asset('public/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('public/assets/js/popper.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('public/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/imgfix.min.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>

  </body>
</html>