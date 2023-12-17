<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Meublekas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">

    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body>

    <div class="container">
        @include('layouts.Backend.Navbar')
        @include('layouts.Backend.Sidebar')
        @include('layouts.Backend.Slider')
        @yield('content')
        @include('layouts.Backend.Footer')
    </div>
    @include('layouts.Backend.FooterScripts')
</body>

</html>
