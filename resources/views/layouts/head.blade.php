<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="{{ asset('public/assets/fonts/sansation/style.css') }}" rel="stylesheet" type="text/css" />

    @stack('styles')

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
</head>
<body>
    @yield('content')

</body>
</html>
