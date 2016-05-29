<!DOCTYPE HTML>
<html>
<head>
<title>KHAMSAT</title>
<link rel="icon" href="{{ asset('images/icon.png')}}">
<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
<link rel="stylesheet" href="{{ asset('css/templatemo_style.css')}}">
<link rel="stylesheet" href="{{ asset('css/templatemo_misc.css')}}">
<link rel="stylesheet" href="{{ asset('css/flexslider.css')}}">
<link rel="stylesheet" href="{{ asset('css/testimonails-slider.css')}}">


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="publiclication/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'> -->
<script src="{{ asset('js/vendor/jquery-1.11.0.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.gmap3.min.js')}}"></script>
<script src="{{ asset('js/plugins.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
<script src="{{ asset('js/responsiveslides.min.js')}}"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
    
  </script>
    
</head>
<body>
<header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="home-account">
                                    <a href="#">Home</a>
                                    <a href="#">My account</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <h3 id="logo"> Pharma </h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/about">About Us</a></li>
                                    @if (Auth::guest())
                                        <li><a href="{{ url('/login') }}">Login</a>
                                        </li>
                                        <li><a href="{{ url('/register') }}">Register</a></li>
                                    @else
                                        
                                        <li><a href="/users/{{ Auth::user()->id }}" > <img width="30px" height="20px" src="{{ Auth::user()->image }}" alt=""> {{ Auth::user()->name }} </a>
                                        <!-- {{ Auth::user()->name }} -->
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                           
                                    @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="search-box">  
                                    <form name="search_form" method="get" class="search_form">
                                        <input id="search" type="text" />
                                        <input type="submit" id="search-button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


<!-- header -->
    @yield('content')

<!-- footer sector -->
        <div class="footer">
            <div class="col-md-3 foot-1">
                <h4>Latest Posts</h4>
                <ul>
                <li><a href="">||   </a></li>

            
                </ul>
            </div>
            <div class="col-md-3 foot-1">
                <h4>Top viewed</h4>
                <ul>
                <li><a href="">||   </a></li>

                </ul>
            </div>
            <div class="col-md-3 foot-1">
                <h4>Categories</h4>
                <ul>
                    <li><a href="">||  </a></li>
                </ul>
            </div>
            <div class="col-md-3 foot-1">
                <h4>Tags</h4>
                <ul> 
                    <li><a href="">||  </a></li>
                </ul>
            </div>
            
            <div class="clearfix"> </div>
            <div class="copyright">
                <div class="bottom-footer">
                        <p>
                            <span>Copyright © 2084 <a href="#">BusinessMonk</a> 
                            | Design: <a rel="nofollow" href="#" target="_parent"><span class="blue">Pharmateam</span><span class="green">ITI</span></a></span>
                        </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
