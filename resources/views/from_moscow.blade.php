<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Доставка грузов</title>
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- language CSS -->
    <link href="css/language-select.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Main menu -->
    <link href="css/menu.css" rel="stylesheet">
    <!-- Template Common Styles -->
    <link href="css/template.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/vendor/html5shim.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>


<body id="page-top">
<div id="st-container" class="st-container">
    <div class="st-pusher">
        <div class="st-content">
            <header class="header">
                <nav class="top-bar">
                    <div class="overlay-bg">
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-6 col-xs-12">
                                    <div class="call-to-action">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-phone"></i> +375 44 561-39-04</a></li>
                                            <li><a href="#"><i class="fa fa-envelope"></i> mosdostavka@gmail.com/</a></li>
                                        </ul>
                                    </div><!-- /.call-to-action -->
                                </div><!-- /.col-sm-6 -->

                                <div class="col-sm-6 hidden-xs">
                                    <div class="topbar-right">


                                        <ul class="social-links list-inline pull-right">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                        </ul>
                                    </div><!-- /.social-links -->
                                </div><!-- /.col-sm-6 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.overlay-bg -->
                </nav><!-- /.top-bar -->



                <nav class="navbar navbar-default" role="navigation">

                    <div class="container mainnav">
                        <div class="navbar-header">
                            <h1 class="logo"><a class="navbar-brand" href="{{ route('home') }}"><img src="img/logo.png" alt=""></a></h1>

                            <!-- offcanvas-trigger -->
                            <button type="button" class="navbar-toggle collapsed pull-right" >
                                {{--                                <span class="sr-only">Toggle navigation</span>--}}
                                {{--                                <i class="fa fa-bars"></i>--}}
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-collapse">



                            {{--                            <span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>--}}

                            <ul class="nav navbar-nav navbar-right">
                                <!-- Home -->
                                <li class="dropdown active"><a href="{{ route('home') }}">Главная</a>

                                </li>
                                <!-- /Home -->

                                <!-- Pages -->
                                <li class="dropdown"><a href="{{ route('services') }}">Подробнее об услугах <span class="fa fa-angle-down"></span></a>
                                    <!-- submenu-wrapper -->
                                    <div class="submenu-wrapper">
                                        <div class="submenu-inner">
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('fromMoscow') }}">Доставка посылок из Москвы</a></li>
                                                <li><a href="{{ route('toMoscow') }}">Доставка посылок в Москву</a></li>
                                                <li><a href="{{ route('helpInMoscow') }}">Помощь в покупке товаров в Москве</a></li>
                                                <li><a href="{{ route('deliveryToMinsk') }}">Доставка автозапчастей в Минск</a></li>
                                                <li><a href="{{ route('deliveryFromIKEA') }}">Доставка в Беларусь товаров из IKEA</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /submenu-wrapper -->
                                </li>
                                <!-- /Pages -->

                                <!-- Services -->
                                <li class="dropdown"><a href="{{ route('prices') }}">Цены </a></li>
                                <li><a href="{{ route('contacts') }}">Контакты</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->


                </nav>
            </header>


            <!-- footer-widget-section end -->

            <!-- copyright-section start -->
            <footer class="copyright-section">
                <div class="container text-center">
                    {{--                    <div class="footer-menu">--}}
                    {{--                        <ul>--}}
                    {{--                            <li><a href="#">Privacy &amp; Cookies</a></li>--}}
                    {{--                            <li><a href="#">Terms &amp; Conditions</a></li>--}}
                    {{--                            <li><a href="#">Accessibility</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}

                    <div class="copyright-info">
                        <span>Доставка-бай © 2020 Курьерская служба доставки из России в Беларусь. </span>
                    </div>
                </div><!-- /.container -->
            </footer>
            <!-- copyright-section end -->
        </div> <!-- .st-content -->
    </div> <!-- .st-pusher -->

    <!-- OFF CANVAS MENU -->
    {{--    <div class="offcanvas-menu offcanvas-effect">--}}
    {{--        <div class="offcanvas-wrap">--}}
    {{--            <div class="off-canvas-header">--}}
    {{--                <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>--}}
    {{--            </div>--}}
    {{--            <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">--}}
    {{--                <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>--}}
    {{--                <li>--}}
    {{--                    <a href="#">Подробнее об услугах</a>--}}
    {{--                    <ul>--}}
    {{--                        <li><a href="about.html">About</a></li>--}}
    {{--                        <li><a href="service.html">Service</a></li>--}}
    {{--                        <li><a href="our-people.html">Our people</a></li>--}}
    {{--                        <li><a href="career.html">Career</a></li>--}}
    {{--                        <li><a href="faq.html">FAQ Page</a></li>--}}
    {{--                        <li><a href="typography.html">Typography</a></li>--}}
    {{--                    </ul>--}}

    {{--                </li>--}}
    {{--                <li>--}}
    {{--                    <a href="#">Services</a>--}}
    {{--                    <ul>--}}
    {{--                        <li><a href="air.html">Air transportation</a></li>--}}
    {{--                        <li><a href="marine.html">Marine transportation</a></li>--}}
    {{--                        <li><a href="moving.html">Moving &amp; storage</a></li>--}}
    {{--                        <li><a href="shipping.html">Shipping &amp; operations</a></li>--}}
    {{--                        <li><a href="transportation.html">Transportation logistics</a></li>--}}
    {{--                        <li><a href="trucking.html">Trucking</a></li>--}}
    {{--                    </ul>--}}

    {{--                </li>--}}
    {{--                <li>--}}
    {{--                    <a href="#">Blog</a>--}}
    {{--                    <ul>--}}
    {{--                        <li>--}}
    {{--                            <a href="blog.html">Standard blog</a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a href="blog-single.html">Single blog</a>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </li>--}}
    {{--                <li><a href="contact.html">Contact</a></li>--}}
    {{--                <li><a href="typography.html">Typography</a></li>--}}
    {{--            </ul>--}}
    {{--            <div class="offcanvas-widgets hidden-sm hidden-xs">--}}
    {{--                <div id="twitterWidget">--}}
    {{--                    <h2>Tweeter feed</h2>--}}
    {{--                    <div class="twitter-widget"></div>--}}
    {{--                </div>--}}
    {{--                <div class="newsletter-widget">--}}
    {{--                    <h2>Оставайтесь на свзяи!</h2>--}}
    {{--                    <p>Оставьте свой email и получите скидку на доставку!</p>--}}

    {{--                    <form class="newsletter-form">--}}
    {{--                        <div class="form-group">--}}
    {{--                            <label class="sr-only" for="InputEmail1">Ваш email</label>--}}
    {{--                            <input type="email" class="form-control" id="InputEmail2" placeholder="Ваш email">--}}
    {{--                            <button type="submit" class="btn">Оставить <i class="fa fa-angle-right"></i></button>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}

    {{--                </div><!-- newsletter-widget -->--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div><!-- .offcanvas-menu -->--}}
</div><!-- /st-container -->


<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel -->
<script src="owl.carousel/owl.carousel.min.js"></script>
<!-- Magnific-popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Offcanvas Menu -->
<script src="js/hippo-offcanvas.js"></script>
<!-- inview -->
<script src="js/jquery.inview.min.js"></script>
<!-- stellar -->
<script src="js/jquery.stellar.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- classie -->
<script src="js/classie.js"></script>
<!-- selectFx -->
<script src="js/selectFx.js"></script>
<!-- sticky kit -->
<script src="js/jquery.sticky-kit.min.js"></script>
<!-- GOGLE MAP -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!--TWITTER FETCHER-->
<script src="js/twitterFetcher_min.js"></script>
<!-- Custom Script -->
<script src="js/scripts.js"></script>
</body>
</html>
