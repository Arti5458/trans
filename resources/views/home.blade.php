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

            <div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
{{--                    <li data-target="#main-carousel" data-slide-to="1"></li>--}}
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/slider/slide-1.jpg" alt="Hero Slide">
                        <!--Slide Image-->

                        <div class="container">
                            <div class="carousel-caption">
                                <small class="animated fadeIn">Позвоните нам сегодня!</small>
                                <div class="phone animated lightSpeedIn">+375 44 561-39-04</div>
                                <h1 class="animated lightSpeedIn">ДОСТАВКА ПОСЫЛОК ИЗ МОСКВЫ</h1>

                                <p class="lead animated lightSpeedIn">Мы не только заберем вашу посылку <br> в любой точке Москвы,
                                    но и, при необходимости,<br> оплатим выбранный товар в любом магазине <br> или интернет-магазине
                                    столицы и организуем <br> доставку в Беларусь по нужному адресу. Также <br> доставляем любые посылки из Беларуси в Москву.</p>

                                <a class="btn btn-primary animated lightSpeedIn" href="#">ВСЕГО ОТ 26,00 БЕЛОРУССКИХ РУБЛЕЙ</a>
                            </div>
                            <!--.carousel-caption-->
                        </div>
                        <!--.container-->
                    </div>
                    <!--.item-->

{{--                    <div class="item">--}}
{{--                        <img src="img/slider/slide-2.jpg" alt="Hero Slide">--}}
{{--                        <!--Slide Image-->--}}

{{--                        <div class="container">--}}
{{--                            <div class="carousel-caption">--}}

{{--                                <h1 class="animated bounceIn">We value your time and money</h1>--}}

{{--                                <p class="lead animated bounceIn">It's a tag line, where you can write a key point of your idea. It--}}
{{--                                    is a long--}}
{{--                                    established fact that a reader will be distracted.</p>--}}
{{--                                <a class="btn btn-primary animated bounceIn" href="#">Work With Us Today</a>--}}
{{--                            </div>--}}
{{--                            <!--.carousel-caption-->--}}
{{--                        </div>--}}
{{--                        <!--.container-->--}}
{{--                    </div>--}}
                    <!--.item-->
                </div>
                <!--.carousel-inner-->

                <!-- Controls -->
                <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- #main-carousel-->


            <!-- services start -->
            <section class="service-home section-padding">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="section-title">ДОБРО ПОЖАЛОВАТЬ!</h2>
                            <span class="section-sub">Ищете курьера для доставки посылки из Москвы? <br>Вы его нашли!)</span>
                        </div>
                    </div> <!-- /.row -->

                    <div class="row content-row">
                        <div class="col-sm-4">
                            <div class="service">
                                <div class="service-thumb-home">
                                    <a href="{{ route('services') }}"><img src="img/trans.jpg" alt=""></a>
                                </div>

                                <h3>БЫСТРАЯ ДОСТАВКА</h3>
                                <p>Обычная доставка посылок занимает от 2 до 5 дней, срочная за 24 часа… </p>
                                <a class="readmore" href="{{ route('services') }}">Больше &nbsp;<i class="fa fa-angle-right"></i> </a>
                            </div>
                        </div><!-- /.col-sm-4 -->

                        <div class="col-sm-4">
                            <div class="service">
                                <div class="service-thumb-home">
                                    <a href="{{ route('services') }}"><img src="img/moving.jpg" alt=""></a>
                                </div>
                                <h3>ЛЮБЫЕ ОБЪЕМЫ</h3>
                                <p>Мы доставляем товары от 1 грамма до 6 тонн с любыми условиями транспортировки…</p>
                                <a class="readmore" href="{{ route('services') }}">Больше &nbsp;<i class="fa fa-angle-right"></i> </a>
                            </div>

                        </div><!-- /.col-sm-4 -->

                        <div class="col-sm-4">
                            <div class="service">
                                <div class="service-thumb-home">
                                    <a href="{{ route('deliveryToMinsk') }}"><img src="img/shipping.jpg" alt=""></a>
                                </div>
                                <h3>ЛЮБАЯ ФОРМА ОПЛАТЫ</h3>
                                <p>Работаем как с физическими, так и с юридическими лицами…</p>
                                <a class="readmore" href="{{ route('deliveryToMinsk') }}">Больше &nbsp;<i class="fa fa-angle-right"></i> </a>
                            </div>
                        </div><!-- /.col-sm-4 -->
                    </div> <!-- /.row -->
                </div><!-- /.container -->
            </section>
            <!-- services end -->

            <!-- featuer-section start -->
            <section class="feature-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-12">
                            <h2>ДОБРО ПОЖАЛОВАТЬ!</h2>

                            <p>Служба курьерской доставки «БыстроЛёт» рада приветствовать вас на своем сайте. Будем надеяться, что сотрудничество с нами принесет вам только положительные эмоции и отличное настроение. Знакомьтесь с нашими услугами!</p>

{{--                            <p>Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>--}}

                            <a href="{{ route('services') }}" class="btn btn-primary">Подробнее об услугах</a>
                        </div>

                    </div>
                </div>
            </section>
            <!-- featuer-section end -->

            <!-- why-us-setion start -->
            <section class="why-us-setion section-padding">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <h2 class="section-title">4 простых шага!</h2>
{{--                            <span class="section-sub">Monotonectally innovate cross-media<br> resources without seamless</span>--}}
                        </div>
                    </div> <!-- /.row -->

                    <div class="row content-row">
                        <div class="col-md-12">
                            <div class="css-tab" role="tabpanel">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#secure" aria-controls="secure" role="tab" data-toggle="tab"><i class="flaticon-logistics15"></i> Secure</a></li>
                                    <li role="presentation"><a href="#trackable" aria-controls="trackable" role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i> Trackable</a></li>
                                    <li role="presentation"><a href="#fast" aria-controls="fast" role="tab" data-toggle="tab"><i class="flaticon-logistics16"></i> Fast</a></li>
                                    <li role="presentation"><a href="#reliable" aria-controls="reliable" role="tab" data-toggle="tab"><i class="flaticon-broken43"></i> Reliable</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active fade in" id="secure">
                                        <div class="css-tab-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="img/secure.png" alt="">
                                                </div><!-- /.col-md-6 -->

                                                <div class="col-md-6 content-text">
                                                    <h3>Continually disintermediate</h3>

                                                    <p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p>

                                                    <p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
                                                </div><!-- /.col-md-6 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.css-tab-content -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="trackable">
                                        <div class="css-tab-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="img/track.png" alt="">
                                                </div><!-- /.col-md-6 -->

                                                <div class="col-md-6 content-text">
                                                    <h3>Continually disintermediate</h3>

                                                    <p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p>

                                                    <p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
                                                </div><!-- /.col-md-6 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.css-tab-content -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="fast">
                                        <div class="css-tab-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="img/fast.png" alt="">
                                                </div><!-- /.col-md-6 -->

                                                <div class="col-md-6 content-text">
                                                    <h3>Continually disintermediate</h3>

                                                    <p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p>

                                                    <p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
                                                </div><!-- /.col-md-6 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.css-tab-content -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="reliable">
                                        <div class="css-tab-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="img/reliable.png" alt="">
                                                </div><!-- /.col-md-6 -->

                                                <div class="col-md-6 content-text">
                                                    <h3>Continually disintermediate</h3>

                                                    <p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p>

                                                    <p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
                                                </div><!-- /.col-md-6 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.css-tab-content -->
                                    </div>
                                </div>
                            </div><!-- /.css-tab -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                </div><!-- /.container -->
            </section>
            <!-- why-us-setion end -->

            <!-- testimonial-section start -->
            <section class="testimonial-section section-padding">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="section-title">Нам доверяют!</h2>
                            <span class="section-sub">Взгляниете на несколько отзывов о нашей компании</span>
                        </div>
                    </div> <!-- /.row -->

                    <div class="row row-content">
                        <div class="col-md-12">
                            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                                    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="testimonial-content">
                                            <p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
                                            <span class="client-title">- Deanna Lewis -</span>
                                        </div><!-- /.testimonial-content -->
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
                                            <span class="client-title">- Deanna Lewis -</span>
                                        </div><!-- /.testimonial-content -->
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-content">
                                            <p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
                                            <span class="client-title">- Deanna Lewis -</span>
                                        </div><!-- /.testimonial-content -->
                                    </div>
                                </div>
                            </div><!-- /.carousel -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <hr>

                    <div class="partner-section">
                        <div class="row row-content">
                            <div class="col-md-12">
                                <div class="owl-carousel partner-carousel">
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p1.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p2.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p4.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p5.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p1.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p2.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="img/partner/p4.jpg" alt=""></a>
                                    </div>
                                </div>


                                <div class="partner-carousel-navigation">
                                    <a class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="next"><i class="fa fa-angle-right"></i></a>
                                </div><!-- /.partner-carousel-navigation -->


                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.partner-section -->
                </div><!-- /.container -->
            </section>
            <!-- testimonial-section end -->

            <!-- counter start -->
            <section class="counter-section" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="counter-block">
                                <span class="count-description flaticon-boat"><strong class="timer">999</strong> заказов доставлено</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="counter-block">
                                <span class="count-description flaticon-international"><strong class="timer">5</strong>стран доставки</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="counter-block">
                                <span class="count-description flaticon-compass"><strong class="timer">521</strong>что то еще..</span>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.counter-section -->
            <!-- counter end -->

            <!-- cta start -->
{{--            <section class="cta-section">--}}
{{--                <div class="container text-center">--}}
{{--                    <a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn">Get a Quote</a>--}}

{{--                    <!-- Modal -->--}}
{{--                    <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--                                    <h3 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your goods.</h3>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <form id="contactForm" action="sendemail.php" method="POST">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="name">Name</label>--}}
{{--                                                    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="company">Company Name</label>--}}
{{--                                                    <input id="company" name="company" type="text" class="form-control" placeholder="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="phone">Phone Number</label>--}}
{{--                                                    <input id="phone" name="phone" type="text" class="form-control" placeholder="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="email">Email address</label>--}}
{{--                                                    <input id="email" name="email" type="email" class="form-control" required="" placeholder="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="city">City Name</label>--}}
{{--                                                    <input id="city" name="city" type="text" class="form-control" placeholder="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="subject">Subject</label>--}}
{{--                                                    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group text-area">--}}
{{--                                            <label for="message">Your Message</label>--}}
{{--                                            <textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>--}}
{{--                                        </div>--}}

{{--                                        <button type="submit" class="btn btn-primary">Send Message</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div><!-- /.container -->--}}
{{--            </section><!-- /.cta-section -->--}}
            <!-- cta end -->

            <!-- footer-widget-section start -->
            <section class="footer-widget-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1 col-sm-4">
                            <div class="footer-widget">
                                <h3>Адреса и контакты</h3>

                                <address>
                                    Минск
                                    <br>
                                    <br>
                                    какой то адрес<br>

                                    <!-- Google Map Modal Trigger -->
{{--                                    <button type="button" class="modal-map" data-toggle="modal" data-target="#cssMapModal">Location  Map</button>--}}

                                    <span class="tel">+375 44 561-39-04</span>
                                </address>


                                <!-- Modal -->
{{--                                <div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                                    <div class="modal-dialog modal-lg">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--                                                <h4 class="modal-title" id="myModalLabel">Our Location</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}

{{--                                                <div id="googleMap"></div>--}}

{{--                                            </div>--}}
{{--                                        </div><!-- /.modal-content -->--}}
{{--                                    </div><!-- /.modal-dialog -->--}}
{{--                                </div><!-- End Modal -->--}}
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-4 -->

                        <div class="col-md-3 col-sm-4">
                            <div class="footer-widget">
                                <h3>Доставка</h3>

                                <ul>
                                    <li><a href="{{ route('contacts') }}">О нас</a></li>
                                    <li><a href="{{ route('prices') }}">Цены</a></li>
                                    <li><a href="{{ route('fromMoscow') }}">Доставка из Москвы</a></li>
                                    <li><a href="{{ route('toMoscow') }}">Доставка в Москву</a></li>
                                </ul>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-4 -->

{{--                        <div class="col-md-4 col-sm-4">--}}
{{--                            <div class="footer-widget">--}}
{{--                                <h3>Давайте оставайтся на свзяи!</h3>--}}
{{--                                <p>Оставьте свой email и получите скидку на доставку!</p>--}}

{{--                                <form class="newsletter-form">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="sr-only" for="InputEmail1">Ваш email</label>--}}
{{--                                        <input type="email" class="form-control" id="InputEmail1" placeholder="Ваш email">--}}
{{--                                        <button type="submit" class="">Оставить<i class="fa fa-angle-right"></i></button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div><!-- /.footer-widget -->--}}
{{--                        </div><!-- /.col-md-4 -->--}}
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.cta-section -->
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
