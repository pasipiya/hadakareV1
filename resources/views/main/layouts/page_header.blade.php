<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from thewebmax.com/spa/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2019 18:46:09 GMT -->
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="main/images/icon_hadakaree.jpg" />
    
    <!-- PAGE TITLE HERE -->
    <title>hadakaree</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/fontawesome/css/font-awesome.min.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="main/css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="main/css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/custom.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="main/css/switcher.css">    

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="main/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="main/plugins/revolution/revolution/css/navigation.css">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body id="bg">
    <!-- HEADER -->
    <header class="site-header header-style-1 ">
    
            <div class="top-bar bg-secondry">
                <div class="container">
                    <div class="row">
                        <div class="wt-topbar-right clearfix">
                            <ul class="social-bx list-inline pull-right">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i>hadakaree.com</li>
                                <li><i class="fa fa-phone"></i>xxxxxxxxx</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                        <div class="container">
                        
                            <div class="logo-header mostion">
                                <a href="index.html">
                                    <img src="main/images/logo_hadakaree.png" width="230" height="67" alt="" />
                                </a>
                            </div>
                            
                            <!-- NAV Toggle Button -->
                            <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                           
                            <!-- ETRA Nav -->
                            <div class="extra-nav">
                                <div class="extra-cell">
                                    <form class="example" action="search">
                                        <input value="" type="text" placeholder="Search a Salon.." name="search1">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                            </div>
                            <div class="extra-cell">
                                   
                                    
                             </div>
                        </div>    
                        
                            
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="home">Home<i class="fa fa-chevron"></i></a>
                                </li>
                            
                                <li>
                                    <a href="trending">Trending<i class="fa fa-chevron"></i></a>
                                    
                                </li>

                                <li>
                                    <a href="salon">Salons<i class="fa fa-chevron"></i></a>
                                    
                                </li>
                                                                <!-- Right Side Of Navbar -->
                    <li class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </li>
                                
                               {{-- <li class="active">
                                        <a href="javascript:;">Account<i class="fa fa-chevron-down" style="color:black"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="login">Sign in</a></li>
                                            <li><a href="index-2.html">Register</a></li>
                                        </ul>
                                       
                                   
                                </li> --}}

                                {{-- <li>
                                    <form class="example" action="search">
                                        <input value="" type="text" placeholder="Search.." name="search1">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                    
                                </li> --}}
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->



</body>
        
        
