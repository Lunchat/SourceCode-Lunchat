<!doctype html>
<html lang="en">

<head>
   


    <link rel="icon" href="{{ asset('img/LOGO-LUNCHAT.png') }}">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/popup/magnific-popup.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css') }}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css1/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css1/css/responsive.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->


    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    
    <!--====== Favicon Icon ======-->
    <link rel="icon" href="{{ asset('img/LOGO-LUNCHAT.png') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/slick.css')}}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/animate.css')}}">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/nice-select.css')}}">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/jquery.nice-number.min.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/magnific-popup.css')}}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/bootstrap.min.css')}}">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/default.css')}}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('css1/css/responsive.css')}}">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            
    <div class="cssload-loader">LUNCHAT.ONLINE</div>
</div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul class="list header_social">
                        <li><a href="https://www.facebook.com/lunchat.citchat"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/lunchat22"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <a class="dn_btn" href="mailto:apps.lunchat22@gmail.com"><i class="fa fa-envelope-o"></i> lunchat22@gmail.com</a>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <header class="header_area">

        <div class="navigation navigation-2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{asset('images/logo1.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="active" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/tentang') }}">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/events') }}">Events</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="teachers.html">Our teachers</a>
                                        <ul class="sub-menu">
                                            <li><a href="teachers.html">teachers</a></li>
                                            <li><a href="teachers-singel.html">teacher Singel</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="{{ url('/kontak') }}">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Login</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/login') }}">Student</a></li>
                                            <li><a href="{{ url('/login/mentor') }}">Mentors & Teachers</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                </div>
            </nav>
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->

     @yield('content')  

    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="{{asset('images/lunchat11.png')}}" alt="Logo"></a>
                            </div>
                            <p class="justify">Lunchat berasal dari kata voluntary chit chat, dimana sebuah platform yang bergerak dibidang pendidikan yang memiliki tujuan untuk meningkatkan kemampuan masyarakat Indonesia dalam berbicara bahasa Inggris. melalui platform ini para peserta dapat mengikuti kelas sharing session, grammar, writing, dan/atau speaking dimana peserta dapat memilih kelas yang sesuai dengan kebutuhannya.</p>
                            <ul class="mt-20">
                                <li><a href="https://www.facebook.com/lunchat.citchat"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCkN35Jsv2BXD4cp7TC2ISeg"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/lunchat22"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="{{ url('/') }}"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="{{ url('/tentang') }}"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="{{ url('/kontak') }}"><i class="fa fa-angle-right"></i>Contact</a></li>
                                <li><a href="{{ url('/events') }}"><i class="fa fa-angle-right"></i>Event</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Login</h6>
                            </div>
                            <ul>
                                <li><a href="{{ url('/login') }}"><i class="fa fa-angle-right"></i>Student</a></li>
                                <li><a href="{{ url('/login/mentor') }}"><i class="fa fa-angle-right"></i>Voluntary Mentor & <br>Online Teacher</a></li>
                            </ul>
                        </div> <!-- support -->
                    
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Jl. Sekolah Internasional No.1-2, Antapani, Kota Bandung,  Jawa Barat 40282</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+6281224669308</p>
                                        <p>+6288210473137</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>lunchat22@gmail.com</p>
                                        <p>lunchat20@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p><a target="_blank" href="">Copyright © 2020 Lunchat</a> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                           
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="{{ asset('js1/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js1/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('js1/js/bootstrap.min.js')}}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{ asset('js1/js/slick.min.js')}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('js1/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{ asset('js1/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('js1/js/jquery.counterup.min.js')}}"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{ asset('js1/js/jquery.nice-select.min.js')}}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{ asset('js1/js/jquery.nice-number.min.js')}}"></script>
    
    <!--====== Count Down js ======-->
    <script src="{{ asset('js1/js/jquery.countdown.min.js')}}"></script>
    
    <!--====== Validator js ======-->
    <script src="{{ asset('js1/js/validator.min.js')}}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('js1/js/ajax-contact.js')}}"></script>
    
    <!--====== Main js ======-->
    <script src="{{ asset('js1/js/main.js')}}"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{ asset('js1/js/map-script.js')}}"></script>

</body>

</html>