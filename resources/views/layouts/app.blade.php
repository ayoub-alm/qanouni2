<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/fonts/lineicons/font-css/LineIcons.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

        <!--====== Jquery js ======-->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
        
        <!--====== Bootstrap js ======-->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        
        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>
        
        <!--====== Scrolling Nav js ======-->
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/scrolling-nav.js"></script>
        
        <!--====== Ajax Contact js ======-->
        <script src="assets/js/ajax-contact.js"></script>
        
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
        
</head>
<body>
    <div id="app">
    <!--====== HEADER PART START ======-->
    <header class="header_area">
        <div class="header_top">
            <div class="container-fluid">
                <div class="header_top_content d-md-flex justify-content-between">
                    <div class="header_info text-center">
                        <ul>
                            <li><i class="lni lni-mobile"></i> <a href="#"> 0619903092 </a></li>
                            <li><i class="lni lni-envelope"></i> <a href="#"> hello@yourlawfirm.com</a></li>
                        </ul>
                    </div> <!-- header info -->
                    <div class="header_social d-none d-md-block">
                        <ul>
                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> <!-- header social -->
                </div> <!-- header top content -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header_navbar" style="background-color: #74d1c6;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html" style="color: rgb(255, 255, 255);font-size: 1.3em;;">
                                <!-- <img src="assets/images/logo.png" alt="Logo"> -->
                                <span style="color: black;font-weight: bolder;font-size:px;">
                                    قانوني
                                </span>
                                <br>
                                9ANOUNI
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent" >
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#practice">Practice Areas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>

                                                                      <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif
            
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div> <!-- navbar collapse -->
            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                {{-- <ul class="navbar-nav me-auto">
            
                                </ul> --}}
            
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">
  
                                </ul>

                                <div class="navbar-btn d-none d-sm-inline-block">
                                    <a class="main-btn" data-scroll-nav="0" href="#contact">Free Consultation</a>
                                </div>
    
                                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <span class="navbar-toggler-icon"></span>
                                </button> --}}
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
    </header>

        <main class="py-4" style="margin-top:120px; ">
            @yield('content')
        </main>
    </div>
</body>
</html>
