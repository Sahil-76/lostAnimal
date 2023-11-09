<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Webwiz">
    <meta name="author" content="Noticeboard Team">
    <meta name="author" content="Ogele Timothy">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>@yield('title', 'Lost Animal App')</title> -->
    <title>Lost Animal</title>

    <link href="{{ asset('assets/css/flexslider.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/line-icons.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/elegant-icons.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ie9.css') }}" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="{{ asset('assets/js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
</head>
<body>
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>



<div class="nav-container">
    <nav class="top-bar overlay-bar">
        <div class="container">

            <div class="row nav-menu">
                <div class="col-sm-3 col-md-2 columns">
                    <a href="{{ url('/') }}">
                        <img class="logo logo-light" alt="Logo" src="{{ asset('assets/img/logo-small.jpg') }}">
                        <img class="logo logo-dark" alt="Logo" src="{{ asset('assets/img/logo-small.jpg') }}">
                        
                    </a>
                </div>

                <div class="col-sm-9 col-md-10 columns">
                    <ul class="menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <!-- <li><a  href="http://forum.noticebod.com">Forum</a></li> -->
                        @if (Auth::guest())
                            <li><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('register') }}">Signup</a></li>
                        @else
                            <li><a href="{{ url('home') }}">Dashboard</a></li>
                            <li><a href="{{ url('logout') }}">Logout</a></li>
                        @endif
                    </ul>

                    <ul class="social-icons text-right">

                        <li>
                            <a href="https://twitter.com/oaunoticeboard">
                                <i class="icon social_twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://facebook.com/oaunoticeboard">
                                <i class="icon social_facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://instagram.com/oaunoticeboard">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end of row-->

            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>

        </div><!--end of container-->
    </nav>

</div>

<div class="main-container">
    @yield('body')
</div>

<div class="footer-container">

    <footer class="bg-primary short-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="text-white">&copy; 2022 lost Animal App </span>
                    <span class="text-white">
                        <a href="mailto:support@noticebod.com">lostanimal@app.com</a>
                    </span>
                    <span class="text-white">+91-8877665544</span>
                    <span class="text-white">lovely professional University</span>
                </div>
            </div><!--end for row-->
        </div><!--end of container-->

        <div class="contact-action">
            <div class="align-vertical">
                <i class="icon text-white icon_mail"></i>
                <a href="mailto:support@noticebod.com" class="text-white"><span class="text-white">Get in touch with us 
                    <i class="icon arrow_right"></i></span></a>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/skrollr.min.js') }}"></script>
<script src="{{ asset('assets/js/spectragram.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollReveal.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/twitterFetcher_v10_min.js') }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>
