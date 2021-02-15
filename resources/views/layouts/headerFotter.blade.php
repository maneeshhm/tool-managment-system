<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Equipment & Tools For Rent | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }} ">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

    <!-- new css style ---------->
    <link rel="stylesheet" href="{{asset('frontend\assets\css\newcssstyle.css')}}">
    
</head>
<body class="full-wrapper">
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                            <a href="/"><img width="200px" height="100px" src="{{asset('frontend/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">HOME</a></li> 
                                        <li><a href="shop">PRODUCTS</a></li>
                                        <li><a href="about">ABOUT</a></li>
                                        <li><a href="contact">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div>   
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                            <a class="logregbtn" href="{{ route('userLogin') }}" role="button">LOGIN</a>
                            &nbsp;
                            <a class="logregbtn" href="{{ route('customer.register') }}" role="button">REGISTER</a>
                            &nbsp;
                            <!-- Social -->
                            <div class="header-social d-none d-md-block">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
        
        <!--? New Arrival Start -->
        <div class="new-arrival">
            <div class="container">
                <div class="row pt-5 pb-5">
                    @yield('content')           
                </div>
            </div>
        </div>
        <!--? New Arrival End -->
        
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container-fluid ">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="/"><img width="200px" height="100px" src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>We deliver your product to door step</p>
                                    </div>
                                </div>
                                <!-- social -->
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick links</h4>
                                <ul>
                                    <li><a href="#">product </a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Shop Category</h4>
                                <ul>
                                    <li><a href="#">Hand Tools</a></li>
                                    <li><a href="#">Power Tools</a></li>
                                    <li><a href="#">Fastners</a></li>
                                    <li><a href="#">Gardning tools</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Get in touch</h4>
                                <ul>
                                    <li><a href="#">0113 256 896</a></li>
                                    <li><a href="#">info@toolshop.com</a></li>
                                    <li><a href="#">67/A, De Mel Mawatha, Colombo-03</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    @include('sweetalert::alert')


<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('frontend/assets/js/gijgo.min.js')}}"></script>

<!-- Nice-select, sticky,Progress -->
<script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('frontend/assets/js/contact.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/mail-script.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>
</html>