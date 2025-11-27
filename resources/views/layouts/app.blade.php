<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <title>{{ config('app.name', 'Love Economy Church') }} </title>
    <!--Meta-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta property="og:title" content="Love Economy UK - Christ-Centered Church" />
    <meta property="og:description"
        content="Building a nation where Christ is all and in all. A Christ-centered church in the UK committed to dispensing Christ with love through the power of the Holy Spirit." />
    <meta property="og:site_name" content="Love Economy UK" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-114x114.png">

    <!-- Google Fonts -->
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C300%7CLibre+Baskerville%3Aregular%2Citalic%2C700'
        type='text/css' media='all' />

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='css/bootstrap.css' type='text/css' media='screen' />

    <!-- Font Icon CSS -->
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='screen' />

    <!-- Owl Carousel Plugin CSS -->
    <link rel='stylesheet' href='css/owl.carousel.css' type='text/css' media='screen' />

    <!-- Lightbox Plugin CSS -->
    <link rel='stylesheet' href='css/photoswipe.css' type='text/css' media='screen' />

    <!-- Lightbox Plugin Skin CSS -->
    <link rel='stylesheet' href='css/skin/photoswipe/default/default-skin.css' type='text/css' media='screen' />

    <!-- Air. Theme Elements CSS -->
    <link rel='stylesheet' href='css/pagebuild.css' type='text/css' media='screen' />

    <!-- Air. Theme Main CSS -->
    <link rel='stylesheet' href='css/style.css' type='text/css' media='screen' />

    <!-- IE hack -->
    <!--[if lte IE 9]>
 <link rel='stylesheet' id='cssie9'  href='css/ie.css' type='text/css' media='screen' />
 <![endif]-->

    <!--[if lte IE 9]>
 <script type="text/javascript" src="js/ie.js"></script>
 <![endif]-->

    <!--[if lte IE 8]>
 <div style="width: 100%;" class="messagebox_orange">Your browser is obsolete and does not support this webpage. Please use newer version of your browser or visit <a href="http://www.ie6countdown.com/" target="_new">Internet Explorer 6 countdown page</a>  for more information. </div>
 <![endif]-->

</head>

<body
    class="page page-template-default default-dark-logo pswp-light-skin responsive-ux page-template-masonry-body page-template-intro-above-list-body navi-hide show-top-space page_from_top dark-logo header-sticky preload">

    <!--Page Loader-->
    {{-- <div class="page-loading fullscreen-wrap visible">
        <div class="page-loading-inn">
            <div class="page-loading-transform">
                <div class="site-loading-logo"><img src="img/demo/logo-loading.png" alt="Love Economy Church" /></div>
            </div>
        </div>
    </div> --}}

    <!--Audio Player-->
    {{-- <div id="jquery_jplayer" class="jp-jplayer"></div> --}}

    <!--Main wrap-->
    <div class="wrap-all">
        <div id="wrap-outer">

            <!--Header-->
            <header id="header" class="">

                <div id="header-main">

                    <div class="container-fluid">

                        {{-- <span id="navi-trigger">
                            <span class="navi-trigger-text">
                                <span class="navi-trigger-text-menu navi-trigger-text-inn">MENU</span>
                                <span class="navi-trigger-text-close navi-trigger-text-inn">CLOSE</span>
                            </span>
                            <span class="navi-trigger-inn">
                                <span class="navi-trigger-hamberg-line navi-trigger-hamberg-line1"></span>
                                <span class="navi-trigger-hamberg-line navi-trigger-hamberg-line2"></span>
                                <span class="navi-trigger-hamberg-line navi-trigger-hamberg-line3"></span>
                            </span>
                        </span> --}}


                        <div class="navi-logo">

                            <div class="logo-wrap">
                                <div id="logo">
                                    <a class="logo-a" href="{{ route('home.index') }}" title="Love Economy Church">
                                        <h1 class="logo-h1 logo-not-show-txt">Love Economy Church</h1>
                                        <img class="logo-image logo-dark" src="img/demo/logo-loading.png"
                                            alt="Love Economy Church" />
                                        <span class="logo-light"><img class="logo-image" src="img/demo/logo-loading.png"
                                                alt="Love Economy Church" /></span>
                                    </a>
                                </div>
                            </div><!--End logo wrap-->

                        </div>

                    </div>

                </div><!--End header main-->

            </header>

            <div id="menu-panel">

                <div class="menu-panel-inn fullscreen-wrap">

                    {{-- <nav id="navi">

                        <div id="navi-wrap" class="menu-navi-wrap">

                            <ul class="menu clearfix">
                                <li id="menu-item-246" class="menu-item"><a href="page-news.html">News</a></li>
                                <li id="menu-item-256" class="menu-item"><a href="page-about.html">About</a></li>
                                <li id="menu-item-247" class="menu-item"><a href="page-contact.html">Contact</a></li>
                            </ul>

                        </div>

                    </nav> --}}

                    <div id="menu-panel-bottom" class="container-fluid">

                        {{-- <div class="menu-panel-bottom-left col-md-3 col-sm-3 col-xs-3">

                            <div class="search-top-btn-class">
                                <span class="fa fa-search"></span>
                                <form class="search_top_form"  method="get" action="#">
                                    <input type="search" id="s" name="s" class="search_top_form_text" placeholder="Type and Hit Enter">
                                </form>
                            </div> 

                        </div> --}}

                        <div class="menu-panel-bottom-right col-md-9 col-sm-9 col-xs-9">

                            <div class="socialmeida-mobile">

                                <ul class="socialmeida clearfix">
                                    <li class="socialmeida-li">
                                        <a title="Facebook"
                                            href="https://web.facebook.com/LoveEconomyChurch/?_rdc=1&_rdr#"
                                            class="socialmeida-a">
                                            <span class=""></span> <span class="socialmeida-text">Facebook</span>
                                        </a>
                                    </li>

                                    <li class="socialmeida-li">
                                        <a title="X" href="https://x.com/loveeconomychurch" class="socialmeida-a">
                                            <span class=""></span> <span class="socialmeida-text">X</span>
                                        </a>
                                    </li>

                                    <li class="socialmeida-li">
                                        <a title="Instagram" href="http://instagram.com/loveeconomychurch/?hl=en"
                                            class="socialmeida-a">
                                            <span class=""></span> <span
                                                class="socialmeida-text">Instagram</span>
                                        </a>
                                    </li>

                                    <li class="socialmeida-li">
                                        <a title="Instagram" href="https://www.youtube.com/@bishopisaacotiboateng"
                                            class="socialmeida-a">
                                            <span class=""></span> <span class="socialmeida-text">YouTube</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div><!--End #menu-panel-->


            <!-- Main Content Wrap -->
            <div id="wrap">

                <!-- Top Slider -->
                <div class="top-slider">

                    <div class="owl-carousel" data-auto="true" data-item="1" data-center="false" data-margin="0"
                        data-autowidth="false" data-slideby="1" data-showdot="true">

                        <section class="item">
                            <div class="carousel-des-wrap">
                                <div class="carousel-des-wrap-inn container center-ux">
                                    <div class="carousel-des">
                                        <span class="carousel-des-cate clearfix">
                                            <span class="article-cate-a">Our Vision</span>
                                        </span>
                                        <h2 class="carousel-des-wrap-tit">
                                            <span class="carousel-des-wrap-tit-a">Building a Nation Where Christ is
                                                All</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="carousel-img-wrap ux-background-img"
                                    style="background-image:url({{ asset('images/bg_1.JPG') }});"></div>
                            </div>
                        </section>

                        <section class="item">
                            <div class="carousel-des-wrap">
                                <div class="carousel-des-wrap-inn container center-ux">
                                    <div class="carousel-des">
                                        <span class="carousel-des-cate clearfix">
                                            <span class="article-cate-a">Our Mission</span>
                                        </span>
                                        <h2 class="carousel-des-wrap-tit">
                                            <span class="carousel-des-wrap-tit-a">Dispensing Christ With Love</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="carousel-img-wrap ux-background-img"
                                    style="background-image:url({{ asset('images/bg_2.JPG') }});"></div>
                            </div>
                        </section>

                        <section class="item">
                            <div class="carousel-des-wrap">
                                <div class="carousel-des-wrap-inn container center-ux">
                                    <div class="carousel-des">
                                        <span class="carousel-des-cate clearfix">
                                            <span class="article-cate-a">Our Culture</span>
                                        </span>
                                        <h2 class="carousel-des-wrap-tit">
                                            <span class="carousel-des-wrap-tit-a">A Community of Faith, Love &
                                                Excellence</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="carousel-img-wrap ux-background-img"
                                    style="background-image:url({{ asset('images/bg_3.JPG') }});"></div>
                            </div>
                        </section>

                        {{-- <section class="item">
                            <div class="carousel-des-wrap">
                                <div class="carousel-des-wrap-inn container center-ux">
                                    <div class="carousel-des">
                                        <span class="carousel-des-cate clearfix">
                                            <span class="article-cate-a">Join Us</span>
                                        </span>
                                        <h2 class="carousel-des-wrap-tit">
                                            <span class="carousel-des-wrap-tit-a">Welcome to Love Economy UK</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="carousel-img-wrap ux-background-img"
                                    style="background-image:url({{ asset('images/bg_4.JPG') }});"></div>
                            </div>
                        </section> --}}

                    </div>


                </div><!-- End top-slider -->

                <!-- Main Content : List, text content ... -->
                <div id="content">

                    <div class="content_wrap_outer fullwrap-layout">

                        <div id="content_wrap" class="">

                            <section class="ux-portfolio-template-intro container ux-template-intro-left">
                                <h1 style="text-align: center;">Welcome to Love Economy UK</h1>
                                <p style="text-align: center;">
                                <p class="clearfix ux_blank"></p>
                                </p>
                                <p style="text-align: center;">We are a Christ-centered church committed to building a
                                    nation where Christ is all and in all. Through the power of the Holy Spirit and the
                                    revelation of God's word, we are passionate about dispensing Christ with love and
                                    making Him the centre of the world.</p>

                                <div style="margin-top: 40px;">
                                    <h2 style="text-align: center;">Our Vision</h2>
                                    <p style="text-align: center;">Building a nation where Christ is all and in all and
                                        to make Christ the centre of the world by dispensing Christ with love, the Holy
                                        Ghost as our means.</p>

                                    <h2 style="text-align: center; margin-top: 30px;">Our Mission</h2>
                                    <p style="text-align: center;">Building Christ into all men through the revelation
                                        [Galatians 1:16], formation [Galatians 4:19], magnification [Philippians 1:20],
                                        and glorification [2 Thessalonians 1:12] of Christ in all men, until all men
                                        conform to the image of His son [Romans 8:29], using Christ as the building
                                        material.</p>
                                </div>
                            </section>


                            <div class="container-masonry ux-portfolio-spacing-40 ux-portfolio-2col  ux-has-filter filter-center"
                                data-col="2" data-spacer="40" data-template="intro-above">

                                <div class="masonry-list masonry-grid grid-mask-filled-left">

                                    <section class="grid-item grid-item-small" data-postid="170">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 75.384615384615%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/bg_1.JPG') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    <section class="grid-item grid-item-small" data-postid="30">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 75.384615384615%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/img_2.JPG') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    <section class="grid-item grid-item-long grid-item—width2" data-postid="48">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 37.439024390244%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/img_1.JPG') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    <section class="grid-item grid-item-tall" data-postid="97">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 150.09523809524%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/img_3.JPG') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    <section class="grid-item grid-item-small" data-postid="198">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 75.384615384615%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/img_4.JPG') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    <section class="grid-item grid-item-small" data-postid="16">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 75.384615384615%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/img_6.JPG') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    {{-- <section class="grid-item grid-item-small" data-postid="1">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 66.615384615385%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/gallery-7.jpg') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    <section class="grid-item grid-item-small" data-postid="61">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 75.384615384615%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/gallery-8.jpg') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    <section class="grid-item grid-item-small" data-postid="379">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 75.384615384615%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/gallery-9.jpg') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section>

                                    <section class="grid-item grid-item-small" data-postid="511">
                                        <div class="grid-item-inside">
                                            <div class="brick-content ux-lazyload-wrap"
                                                style="padding-top: 75.384615384615%;">
                                                <div class="ux-lazyload-bgimg ux-background-img"
                                                    data-bg="{{ asset('images/gallery-10.jpg') }}"></div>
                                            </div>
                                        </div><!--End inside-->
                                    </section> --}}

                                </div>

                            </div><!-- End container-masonry -->

                        </div><!-- End #content_wrap-->

                    </div><!-- End content_wrap_outer-->

                    <br><br>

                    <div class="content_wrap_outer">

                        <div id="content_wrap">

                            <div class="pagebuilder-wrap">


                                <!--General Wrap-->
                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-md-6 col-sm-6 general_moudle">

                                            <div class="row">

                                                <!--Text Element-->
                                                <div class="col-md-12 col-sm-12 moudle bottom-space-20"
                                                    style="">

                                                    <div class="text_block ux-mod-nobg" data-animationend="fadeined">
                                                        <h5>CONTACT INFO</h5>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">

                                                <!--Text Element-->
                                                <div class="col-md-12 col-sm-12 moudle bottom-space-no"
                                                    style="">

                                                    <div class="text_block ux-mod-nobg" data-animationend="fadeined">
                                                        <p>We would love to hear from you. Reach out to either of our
                                                            branches and connect with our community.</p>
                                                        <p><br></p>

                                                        <h6>Reading Branch</h6>
                                                        <p>90B Great Knollys St.<br>Reading RG1 7HL</p>
                                                        <p><br></p>

                                                        <h6>London Branch</h6>
                                                        <p>2D Arodene Road<br>Brixton Hill<br>London SW2 2BH</p>
                                                        <p><br></p>

                                                        <h6>Email Us</h6>
                                                        <p>info@loveeconomyuk.org</p>
                                                        <p><br></p>

                                                        <h6>Call Us</h6>
                                                        <p>+44 (0) 123 456 7890</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div><!--general_moudle-->

                                        <!--General Wrap-->
                                        <div class="col-md-6 col-sm-6 general_moudle">

                                            <!--Text Element-->
                                            <div class="row">

                                                <div class="col-md-12 col-sm-12 moudle bottom-space-20"
                                                    style="">

                                                    <div class="text_block ux-mod-nobg" data-animationend="fadeined">
                                                        <h5>GET IN TOUCH</h5>
                                                    </div>

                                                </div>

                                                <!--Contact Form-->

                                                <div class="col-md-12 col-sm-12 moudle bottom-space-no"
                                                    style="">

                                                    <div class="contactform ux-mod-nobg">

                                                        <form action="{{ route('contact.submit') }}"
                                                            id="contact-form" class="contact_form" method="POST">
                                                            @csrf
                                                            <p class="span6"><input type="text" id="idi_name"
                                                                    name="idi_name" class="requiredField"
                                                                    value="Name"
                                                                    onBlur="if (this.value =='' ) {this.value = 'Name';}"
                                                                    onFocus="if (this.value == 'Name' || this.value == 'Required' ) { this.value = ''; }" />
                                                            </p>
                                                            <p class="span6"><input type="text" id="idi_mail"
                                                                    name="idi_mail" class="requiredField email"
                                                                    value="Email"
                                                                    onBlur="if (this.value =='' ) {this.value = 'Email';}"
                                                                    onFocus="if (this.value == 'Email' || this.value  == 'Required' || this.value == 'Invalid email' ) {this.value = '';}" />
                                                            </p>
                                                            <p>
                                                                <textarea rows="4" name="idi_text" id="idi_text" cols="4" class="requiredField inputError"
                                                                    onfocus="if(this.value==this.defaultValue|| this.value  == 'Required'){this.value='';}"
                                                                    onblur="if(this.value==''){this.value=this.defaultValue;}">YOUR MESSAGE</textarea>
                                                            </p>
                                                            <input type="hidden" class="info-tip" value="send"
                                                                name="contact_form" data-message="Done!"
                                                                data-sending="Sending"
                                                                data-error="Please Enter Correct Verification Number" />
                                                            <div class="btnarea"><input type="submit" id="idi_send"
                                                                    name="idi_send" value="SEND" /></div>
                                                        </form>

                                                    </div>

                                                </div>

                                            </div>

                                        </div><!--general_moudle-->

                                    </div>

                                </div>
                                <!--End container-fluid-->

                                <br><br>

                                <!--Fullwidth wrap-->
                                <div class="fullwrap_moudle">

                                    <div class="row">

                                        <div class="fullwidth-wrap fullwidth-text-white">

                                            <div class="fullwidth-wrap-inn">

                                                <div class="row">

                                                    <div class="col-md-6 col-sm-12 moudle bottom-space-20"
                                                        style="">
                                                        <h4 style="text-align: center; margin-bottom: 15px;">Reading
                                                            Branch</h4>
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.234567890123!2d-0.9736!3d51.4548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDI3JzE3LjMiTiAwwrA1OCcyNS4wIlc!5e0!3m2!1sen!2suk!4v1234567890123!5m2!1sen!2suk&q=90B+Great+Knollys+St,+Reading+RG1+7HL"
                                                            width="100%" height="400" style="border:0;"
                                                            allowfullscreen="" loading="lazy"
                                                            referrerpolicy="no-referrer-when-downgrade">
                                                        </iframe>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 moudle bottom-space-20"
                                                        style="">
                                                        <h4 style="text-align: center; margin-bottom: 15px;">London
                                                            Branch</h4>
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.567890123456!2d-0.1145!3d51.4482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDI2JzUzLjUiTiAwwrAwNic1Mi4yIlc!5e0!3m2!1sen!2suk!4v1234567890123!5m2!1sen!2suk&q=2D+Arodene+Road,+Brixton+Hill,+London+SW2+2BH"
                                                            width="100%" height="400" style="border:0;"
                                                            allowfullscreen="" loading="lazy"
                                                            referrerpolicy="no-referrer-when-downgrade">
                                                        </iframe>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <!--End fullwrap_moudle-->

                                <!--Normal Wrap-->
                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-md-12 col-sm-12 moudle bottom-space-40">

                                            <div class="separator without-title blank-divider height-80"
                                                data-animationend="fadeined">

                                                <div class="separator_inn bg-" style="top: 8px;"></div>

                                            </div>

                                        </div>

                                    </div>

                                </div><!--End container-fluid-->


                            </div><!-- End pagebuilder-wrap-->

                        </div><!-- End content_wrap-->

                    </div>

                </div><!--End #content-->

                <footer id="footer" class="footer-cols-layout">

                    <div class="footer-info">
                        <div class="footer-container">
                            <div class="span6">
                                <div id="logo-footer">
                                    <a href="index.html" title="Air Theme">
                                        <img class="logo-footer-img" src="img/demo/logo_dark.png" alt="Air Theme" />
                                    </a>
                                </div>
                            </div>

                            <div class="span6">
                                <div class="footer-social">
                                    <ul class="socialmeida clearfix">

                                        <li class="socialmeida-li">
                                            <a title="Facebook"
                                                href="https://web.facebook.com/LoveEconomyChurch/?_rdc=1&_rdr#"
                                                class="socialmeida-a">
                                                <span class=""></span> <span
                                                    class="socialmeida-text">Facebook</span>
                                            </a>
                                        </li>

                                        <li class="socialmeida-li">
                                            <a title="X" href="https://x.com/loveeconomychurch"
                                                class="socialmeida-a">
                                                <span class=""></span> <span class="socialmeida-text">X</span>
                                            </a>
                                        </li>

                                        <li class="socialmeida-li">
                                            <a title="Instagram" href="http://instagram.com/loveeconomychurch/?hl=en"
                                                class="socialmeida-a">
                                                <span class=""></span> <span
                                                    class="socialmeida-text">Instagram</span>
                                            </a>
                                        </li>

                                        <li class="socialmeida-li">
                                            <a title="Instagram" href="https://www.youtube.com/@bishopisaacotiboateng"
                                                class="socialmeida-a">
                                                <span class=""></span> <span
                                                    class="socialmeida-text">YouTube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid back-top-wrap">
                        <div id="back-top"></div>
                    </div>

                </footer>

            </div><!--End #wrap -->

            <div class="video-overlay modal"><span class="video-close"></span></div><!--end video-overlay-->

        </div><!--End wrap-outer-->
    </div>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="pswp__bg"></div>

        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    <!-- jQuery Library -->
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <!-- Main Js Plugin -->
    <script type='text/javascript' src='js/main.min.js'></script>
    <!-- Air. Theme main js -->
    <script type='text/javascript' src='js/custom.theme.js'></script>

</body>

</html>
