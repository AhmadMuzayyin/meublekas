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
    <style>
        .container {
            max-width: 400px;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="container">
        @include('layouts.Frontend.Navbar')

        <!-- panel control right -->
        <div class="panel-control-right">
            <div id="slide-out-right" class="side-nav">
                <div class="row entry">
                    <div class="col s4">
                        <img src="{{ url('assets/img/product2.png') }}" alt="">
                    </div>
                    <div class="col s6">
                        <div class="desc">
                            <h6>Bags Modern</h6>
                            <div class="rating">
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class=""><i class="fa fa-star"></i></span>
                            </div>
                            <h6><span>$22.00</span></h6>
                        </div>
                    </div>
                    <div class="col s2">
                        <div class="action">
                            <i class="fa fa-remove"></i>
                        </div>
                    </div>
                </div>
                <div class="row entry">
                    <div class="col s4">
                        <img src="{{ url('assets/img/product5.png') }}" alt="">
                    </div>
                    <div class="col s6">
                        <div class="desc">
                            <h6>Bags for Women's</h6>
                            <div class="rating">
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class="active"><i class="fa fa-star"></i></span>
                                <span class=""><i class="fa fa-star"></i></span>
                                <span class=""><i class="fa fa-star"></i></span>
                            </div>
                            <h6><span>$24.00</span></h6>
                        </div>
                    </div>
                    <div class="col s2">
                        <div class="action">
                            <i class="fa fa-remove"></i>
                        </div>
                    </div>
                </div>
                <div class="row price">
                    <div class="col s8">
                        <h6>Total</h6>
                    </div>
                    <div class="col s4">
                        <h6>$46.00</h6>
                    </div>
                </div>
                <ul>
                    <li>
                        <button class="button">Checkout</button>
                    </li>
                    <li>
                        <button class="button">View Cart</button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end panel control right -->

        @include('layouts.Frontend.Slider')

        @yield('content')

        @include('layouts.Frontend.Footer')
    </div>
    @include('layouts.Frontend.FooterScripts')
</body>

</html>
