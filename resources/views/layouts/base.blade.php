<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>SAER Protect </title>
    <!-- Stylesheets -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/revolution-slider.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader"></div> --}}

        <!-- Main Header-->
        <header class="main-header">

            <div class="header-top">
                <div class="auto-container clearfix">
                    <!--Top Left-->
                    <div class="top-left pull-left">
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-vimeo"></span></a>
                        </div>
                    </div>

                    <!--Top Right-->
                    <div class="top-right pull-right">
                        <!--Links Nav-->
                        <ul class="links-nav">
                            <li><a href="#">FAQ’S</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Français</a></li>
                        </ul>

                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-outer">
                            <div class="logo"><a href="{{ route('home.index') }}"><img src="/images/saer.png" alt=""
                                        width="200" height="75" title="Saer Protect"></a></div>
                        </div>

                        <div class="pull-right upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-clock-2"></span></div>
                                HORAIRES DE TRAVAIL
                                <div class="light-text">24/7</div>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-technology-1"></span></div>
                                APPELEZ-NOUS
                                <div class="light-text">+223 20 22 52 68</div>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-envelope-3"></span></div>
                                EMAIL
                                <div class="light-text">contact@saerprotect.com</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!--Header-Lower-->
            <div class="header-lower">

                <div class="auto-container">
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('home.index') }}">Accueil</a></li>

                                    <li><a href="{{ route('home.about') }}">A Propos</a></li>
                                    <li><a href="{{ route('home.index') }}">Services</a></li>

                                    <li><a href="{{ route('home.contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-btn"><a href="{{ route('home.contact') }}" class="theme-btn consultation">
                                CONTACTEZ-NOUS
                            </a></div>

                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="{{ route('home.index') }}" class="img-responsive"><img src="/images/saer.png"
                                width="100" height="50" alt="Saer"></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('home.index') }}">Accueil</a></li>
                                    <li><a href="{{ route('home.about') }}">A Propos</a></li>
                                    <li><a href="{{ route('home.index')}}">Services</a></li>
                                    <li><a href="{{ route('home.index') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!--End Main Header -->

        <!--Main Slider-->
        @yield('content')
        <!--sponsors style One-->

        <!--Main Footer-->
        <footer class="main-footer">

            <div class="auto-container">
                <div class="row clearfix">

                    <!--Big Column-->
                    <div class="big-column col-md-5 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column / About Widget-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <div class="widget-content">
                                        <figure class="image-box"><img src="/images/saer.png" width="100%" alt="" />
                                        </figure>
                                        <div class="text">SAER Protect, filiale dediee a la sécurité de SAER Group,
                                            offre une large gamme de services de sécurité spécialisés et
                                            d'externalisation de la gestion de la sécurité, pour vous aider à sécuriser
                                            votre personnel, vos proches, vos locaux et
                                            vos actifs.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Column / Links Widget-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2>LIENS RAPIDES </h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{ route('home.about') }}">A Propos </a></li>
                                            <li><a href="{{ route('home.index') }}">Services</a></li>
                                            <li><a href="{{ route('home.contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Big Column-->
                    <div class="big-column col-md-7 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column / Twitter Widget-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget twitter-widget">
                                    <h2>DERNIÈRS POSTS FACEBOOK</h2>
                                    <div class="widget-content">
                                        <!--feed-->
                                        <div class="feed">
                                            <div class="icon-box"><span class="icon fa fa-facebook"></span></div>
                                            <div class="text"></div>
                                            <span class="month"><a href="#"></a></span>
                                        </div>
                                        <!--feed-->
                                        <div class="feed">
                                            <div class="icon-box"><span class="icon fa fa-facebook"></span></div>
                                            <div class="text"></div>
                                            <span class="month"><a href="#"></a></span>
                                        </div>
                                        <!--feed-->
                                        <div class="feed">
                                            <div class="icon-box"><span class="icon fa fa-facebook"></span></div>
                                            <div class="text"></div>
                                            <span class="month"><a href="#"></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column / Contact Widget-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <h2>CONTACTEZ NOUS </h2>
                                    <div class="widget-content">
                                        <form method="post" action="{{ route('home.message') }}">
                                            @csrf
                                            <!--Form Group-->
                                            <div class="form-group">
                                                <div class="group-inner">
                                                    <input type="text" name="username" placeholder="Nom" required="">
                                                </div>
                                                <div class="group-inner">
                                                    <input type="email" name="email" placeholder="Email">
                                                </div>

                                                <div class="group-inner">
                                                    <input type="text" name="sujet" placeholder="Sujet" required="">
                                                </div>

                                                <div class="group-inner">
                                                    <input type="text" name="telephone" placeholder="Telephone"
                                                        required="">
                                                </div>
                                                <div class="group-inner">
                                                    <button type="submit" class="theme-btn btn-style-one">
                                                        CONTACTEZ-NOUS</button>
                                                </div>
                                            </div>

                                        </form>

                                        <!--Social Icon One-->
                                        <ul class="social-icon-one">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-linkedin" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-vimeo" href="#"></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--column-->
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">&copy; 2023 SAER Protect. All Rights Reserved.

                                Developed by <a href="https://www.niangaly.com">NIANGALY Abdoulaye</a>
                            </div>
                        </div>
                        <!--column-->
                        <div class="column col-md-6 col-sm-6 col-xs-12">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span>
    </div>

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/revolution.min.js"></script>
    <script src="/js/jquery.fancybox.pack.js"></script>
    <script src="/js/jquery.fancybox-media.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/validate.js"></script>

    <script src="http://maps.google.com/maps/api/js?key="></script>
    <script src="/js/map-script.js"></script>
</body>

</html>
