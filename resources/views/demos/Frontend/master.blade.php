<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}" type="text/css" />

    <!-- Construction Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/css/construction.css')}}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/css/css/fonts.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('assets/css/css/colors.css')}}" type="text/css" />


    <!-- Document Title
    ============================================= -->
    <title>JBS Container</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar">

        <div class="container clearfix">

            {{--<div class="col_half nobottommargin clearfix">--}}

                {{--<!-- Top Social--}}
                {{--============================================= -->--}}
                {{--<div id="top-social">--}}
                    {{--<ul>--}}
                        {{--<li>LogIn</li>--}}
                        {{--</ul>--}}
                    {{--<h2>Welcome To JBS container tracing Comany</h2>--}}

                {{--</div><!-- #top-social end -->--}}

            {{--</div>--}}

            <div class="col_half fright col_last clearfix nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul>

                        <li><a href="/">Log In</a>
                            {{--<ul>--}}
                            {{--<li><a href="#">San Francisco</a></li>--}}
                            {{--<li><a href="#">London</a></li>--}}
                            {{--<li><a href="#">Amsterdam</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li><a href="/">Registration</a></li>
                        <li><a href="/contact">Contact</a></li>

                    </ul>
                </div><!-- .top-links end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

        <div class="container clearfix">

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="/" class="standard-logo">
                    <img src="{{asset('assets/images/logo1.png')}}" alt=" Logo"></a>
                <a href="/" class="retina-logo" data-dark-logo="{{asset('assets/images/logo1.png')}}"><img src="{{asset('assets/images/logo1.png')}}" alt="Logo"></a>

            </div><!-- #logo end -->

            <ul class="header-extras">
                <li>

                    <i class="i-plain icon-call nomargin"></i>
                    <div class="he-text">
                        Call Us
                        <span>+031-718231</span>
                    </div>
                </li>
                <li>
                    <i class="i-plain icon-line2-envelope nomargin"></i>
                    <div class="he-text">
                        Email Us
                        <span>jbscontainer123@gmail.com</span>
                    </div>
                </li>
                <li>
                    <i class="i-plain icon-line-clock nomargin"></i>
                    <div class="he-text">
                        We'are Open
                        <span>24 hours in 365 days</span>
                    </div>
                </li>
                {{--<li>--}}
                {{--<div id="">--}}
                {{--<a href="index.html" class="">--}}
                {{--<img src="{{asset('assets/images/logo1.png')}}" alt=" Logo"></a>--}}

                {{--</div>--}}
                {{--</li>--}}
            </ul>



        </div>

        <div id="header-wrap">

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="with-arrows style-2 center">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <ul>
                        <li class="current"><a href="/"><div>Home</div></a></li>
                        <li><a href="/"><div>About Us</div></a>
                            <ul>
                                <li><a href="/about"><div>Our Profile</div></a></li>
                                <li><a href="/attribute"><div>Mission And Attributes</div></a></li>
                                <li><a href="/quality"><div>Quality Policy</div></a></li>

                            </ul>
                        </li>


                        <li><a href="/services"><div>Services</div></a>
                            <ul>
                                <li><a href="/services"><div>Empty Container Shipment</div></a></li>
                                <li><a href="/services3"><div>Empty Container Moves to Off-Dock</div></a></li>
                                <li><a href="/services2"><div>Empty Container Cleaning Job</div></a></li>

                            </ul>
                        </li>
                        {{--<li><a href="demos/construction/investors.html"><div>Investors</div></a></li>--}}
                        <li><a href="/achievements"><div>Achievments</div></a></li>
                        <li><a href="/clients"><div>Clients</div></a></li>
                        <li><a href="/contact"><div>Contact</div></a></li> <li><a href="demos/construction/contact.html"><div>Register</div></a></li> <li><a href="demos/construction/contact.html"><div>Log In</div></a></li>
                    </ul>

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div><!-- #top-search end -->

                </div>

            </nav><!-- #primary-menu end -->

        </div>

    </header><!-- #header end -->
    @yield('content')
<!-- Footer
		============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="widget clearfix">

                        <img src="{{asset('assets/images/logo1.png')}}" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

                        <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Welcome</strong> To JBS Container Tracing Company.</p>

                        <div class="line" style="margin: 30px 0;"></div>

                        <div class="row">

                            <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Achievements</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                <address>
                                    <strong>OFFICE:</strong><br>
                                    102 Amin Bhaban,1st Floor,Barik Building<br>
                                    Strand Road,Bandar,Chattagram-4100<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr>+031-718231<br>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr>+8801707 - 773380<br>
                                <abbr title="Fax"><strong>Phone:</strong></abbr>+01629 - 682422<br>
                                <abbr title="Fax"><strong>Phone:</strong></abbr>+8801742 - 318492<br>


                                <div class="line line-sm"></div>
                            </div>

                            {{--<div class="col-lg-3 col-6 bottommargin-sm widget_links">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#">Corporate</a></li>--}}
                                    {{--<li><a href="#">Agency</a></li>--}}
                                    {{--<li><a href="#">eCommerce</a></li>--}}
                                    {{--<li><a href="#">Personal</a></li>--}}
                                    {{--<li><a href="#">One Page</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                            {{--<div class="col-lg-3 col-6 bottommargin-sm widget_links">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#">Restaurant</a></li>--}}
                                    {{--<li><a href="#">Wedding</a></li>--}}
                                    {{--<li><a href="#">App Showcase</a></li>--}}
                                    {{--<li><a href="#">Magazine</a></li>--}}
                                    {{--<li><a href="#">Landing Page</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clear-bottommargin-sm clearfix">

                        <div class="row">

                            <div class="col-lg-12 bottommargin-sm">
                                <div class="footer-big-contacts">
                                    <span>Call Us:</span>
                                    031-718231
                                </div>
                            </div>

                            <div class="col-lg-12 bottommargin-sm">
                                <div class="footer-big-contacts">
                                    <span>Send an Email:</span>
                                    jbscontainer123@gmail.com
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <div class="row">

                            <div class="col-lg-6 clearfix bottommargin-sm">
                                <a href="{{asset('https://www.facebook.com/jbsctc/')}}" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="{{asset('https://www.facebook.com/jbsctc/')}}"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-lg-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>
                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2020 All Rights Reserved by JBS Container.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="copyrights-menu copyright-links clearfix">
                        <a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
                    </div>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>


<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/functions.js')}}"></script><script src="{{asset('assets/js/custom.js')}}"></script>


</body>
