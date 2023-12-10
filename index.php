<?php require_once 'components/header.php'; ?>
<?php
    if (isset($_POST['submit'])) {
        echo "<script>alert('Application received!')</script>";
    }
?>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->


<!--Main Slider Start-->
<section class="main-slider main-slider-style1">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
        <div class="swiper-wrapper">
            <div class="slider-buttom-box">
                <a class="style2" href="user">Make Payment <span class="icon-play-button"></span></a>
                <a href="contact">Make an Enquiry <span class="icon-play-button"></span></a>
            </div>

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/slides/slide-v1-1.jpg);">
                </div>
                <div class="main-slider-style1__shape1" style="background-image: url(assets/images/shapes/slider-1-shape-1.png);">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>Bank with the<br> Happiest Customers<br> in the World</h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Serving our communities and customers first is our utmost priority. Get to always get updates of our bank
                                        </p>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="user/signup">
                                            <span class="txt">
                                                Get Started
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/slides/slide-v1-2.jpg);">
                </div>
                <div class="main-slider-style1__shape1" style="background-image: url(assets/images/shapes/slider-1-shape-1.png);">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>Banking Made<br> Easy, More Secure &<br> More Personal</h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Vertexphoenix is a universal bank, which is operational from any part of the world.
                                        </p>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="user/signup">
                                            <span class="txt">
                                                Get Started
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/slides/slide-v1-3.jpg);">
                </div>
                <div class="main-slider-style1__shape1" style="background-image: url(assets/images/shapes/slider-1-shape-1.png);">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>An Innovative<br> Framework for Your<br> Financial solutions</h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Your funds are safeguarded from unauthorized access, including account details and transactions, are kept confidential from any potential threats or breaches.
                                        </p>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="user/signup">
                                            <span class="txt">
                                                Get Started
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->


        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-chevron left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-chevron right"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->

<!--Start Features Style1 Area-->
<section class="features-style1-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Bank for a Better Tomorrow</h2>
            <div class="sub-title">
                <p>Committed to helping our customers succeed.</p>
            </div>
        </div>
        <div class="features-style1-content">
            <ul class="clearfix">
                <!--Start Single Features Style1 Box-->
                <li>
                    <div class="single-features-style1-box">
                        <div class="shape-left">
                            <img src="assets/images/shapes/shape-1.png" alt="">
                        </div>
                        <div class="shape-bottom">
                            <img src="assets/images/shapes/shape-2.png" alt="">
                        </div>
                        <div class="counting-box">
                            <div class="counting-box-bg" style="background-image: url(assets/images/shapes/counting-box-bg.png);"></div>
                            <h3>01</h3>
                        </div>
                        <div class="text-box">
                            <h4>Open Account</h4>
                            <h3>Open account with Vertexphoenix</h3>
                            <p>Open an account and open your world to more.</p>
                            <div class="btn-box">
                                <a href="user/signup">
                                    Get Started
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!--End Single Features Style1 Box-->
                <!--Start Single Features Style1 Box-->
                <li>
                    <div class="single-features-style1-box">
                        <div class="shape-left">
                            <img src="assets/images/shapes/shape-1.png" alt="">
                        </div>
                        <div class="shape-bottom">
                            <img src="assets/images/shapes/shape-2.png" alt="">
                        </div>
                        <div class="counting-box">
                            <div class="counting-box-bg" style="background-image: url(assets/images/shapes/counting-box-bg.png);"></div>
                            <h3>02</h3>
                        </div>
                        <div class="text-box">
                            <h4>Cards</h4>
                            <h3>Vertexphoenix Cards</h3>
                            <p>Cards you can use anywhere for all your financial.</p>
                            <div class="btn-box">
                                <a href="cards">
                                    Learn More
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!--End Single Features Style1 Box-->
                <!--Start Single Features Style1 Box-->
                <li>
                    <div class="single-features-style1-box">
                        <div class="shape-left">
                            <img src="assets/images/shapes/shape-1.png" alt="">
                        </div>
                        <div class="shape-bottom">
                            <img src="assets/images/shapes/shape-2.png" alt="">
                        </div>
                        <div class="counting-box">
                            <div class="counting-box-bg" style="background-image: url(assets/images/shapes/counting-box-bg.png);"></div>
                            <h3>03</h3>
                        </div>
                        <div class="text-box">
                            <h4>Money Transfer</h4>
                            <h3>Stragegic Transfer</h3>
                            <p>Reliable, safe and secure ways to send and receive money.</p>
                            <div class="btn-box">
                                <a href="user">
                                    Learn More
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!--End Single Features Style1 Box-->
            </ul>
        </div>
    </div>
</section>
<!--End Features Style1 Area-->

<!--Start Service Style1 Area-->
<section id="service" class="service-style1-area">
            <div class="service-style1-bg" style="background-image: url(assets/images/backgrounds/service-style1.jpg);">
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="service-style1-title">
                            <div class="sec-title">
                                <h2>Banking For Your Needs</h2>
                                <div class="sub-title">
                                    <p>The bank that builds better relationships.</p>
                                </div>
                            </div>
                            <div class="get-assistant-box">
                                <a href="#"><span class="icon-chatting"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="service-style1-tab">
                            <!--Start Service Style1 Tab Button-->
                            <div class="service-style1-tab__button">
                                <ul class="tabs-button-box clearfix">
                                    <li data-tab="#individuals" class="tab-btn-item">
                                        <div class="inner">
                                            <div class="left">
                                                <h4>Banking for</h4>
                                                <h3>Individuals</h3>
                                            </div>
                                            <div class="right">
                                                <span class="icon-down-arrow"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tab="#companies" class="tab-btn-item active-btn-item">
                                        <div class="inner">
                                            <div class="left">
                                                <h4>Banking for</h4>
                                                <h3>Companies</h3>
                                            </div>
                                            <div class="right">
                                                <span class="icon-down-arrow"></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End Service Style1 Tab Button-->

                            <!--Start Tabs Content Box-->
                            <div class="tabs-content-box">

                                <!--Tab-->
                                <div class="tab-content-box-item" id="individuals">
                                    <div class="service-style1-tab-content-box-item">
                                        <div class="row">
                                            <!--Start Single Service Box Style1-->
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="single-service-box-style1">
                                                    <div class="icon">
                                                        <span class="icon-safebox"></span>
                                                    </div>
                                                    <h3><a href="#">Savings & CDs</a></h3>
                                                    <div class="border-box"></div>
                                                    <p>Take trivial example which of us ever all
                                                        undertakes laborious.</p>
                                                    <h6><span>*</span> Interest rate up to 5% p.a</h6>
                                                    <div class="btn-box">
                                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Service Box Style1-->
                                            <!--Start Single Service Box Style1-->
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="single-service-box-style1">
                                                    <div class="icon">
                                                        <span class="icon-online"></span>
                                                    </div>
                                                    <h3><a href="#">Online & Mobile</a></h3>
                                                    <div class="border-box"></div>
                                                    <p>Equal blame belongs to those who fail their duty through
                                                        weakness.</p>
                                                    <h6><span>*</span> Terms & Conditions</h6>
                                                    <div class="btn-box">
                                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Service Box Style1-->
                                            <!--Start Single Service Box Style1-->
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="single-service-box-style1">
                                                    <div class="icon">
                                                        <span class="icon-loan"></span>
                                                    </div>
                                                    <h3><a href="#">Consumer Loans</a></h3>
                                                    <div class="border-box"></div>
                                                    <p>Duty or the obligations of business will frequently occur
                                                        repudiated.</p>
                                                    <h6><span>*</span> Check today’s Interest Rates</h6>
                                                    <div class="btn-box">
                                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Service Box Style1-->
                                        </div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab-content-box-item tab-content-box-item-active" id="companies">
                                    <div class="service-style1-tab-content-box-item">
                                        <div class="row">
                                            <!--Start Single Service Box Style1-->
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="single-service-box-style1">
                                                    <div class="icon">
                                                        <span class="icon-safebox"></span>
                                                    </div>
                                                    <h3><a href="#">Personal Banking</a></h3>
                                                    <div class="border-box"></div>
                                                    <p>Vertexphoenix Bank personal savings account options are designed to help you meet your financial goals.</p>
                                                    <!-- <h6><span>*</span> Interest rate up to 5% p.a</h6> -->
                                                    <div class="btn-box">
                                                        <a href=""><span class="icon-right-arrow"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Service Box Style1-->
                                            <!--Start Single Service Box Style1-->
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="single-service-box-style1">
                                                    <div class="icon">
                                                        <span class="icon-online"></span>
                                                    </div>
                                                    <h3><a href="#">Business Banking</a></h3>
                                                    <div class="border-box"></div>
                                                    <p>Built to improve business convenience and supported by superior customer service</p>
                                                    <!-- <h6><span>*</span> Terms & Conditions</h6> -->
                                                    <div class="btn-box">
                                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Service Box Style1-->
                                            <!--Start Single Service Box Style1-->
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="single-service-box-style1">
                                                    <div class="icon">
                                                        <span class="icon-loan"></span>
                                                    </div>
                                                    <h3><a href="#">Mortgages Management</a></h3>
                                                    <div class="border-box"></div>
                                                    <p>Buying and refinancing solutions to help you own your dream home.</p>
                                                    <h6><span>*</span> Best of best</h6>
                                                    <div class="btn-box">
                                                        <a href="#"><span class="icon-right-arrow"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Service Box Style1-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End Tabs Content Box-->

                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-xl-12">
                        <div class="service-style1__btns-box text-center">
                            <a class="btn-one" href="#">
                                <span class="txt">View All Services</span>
                            </a>
                        </div>
                    </div>
                </div> -->

            </div>
        </section>
<!--End Service Style1 Area-->

<!--Start Wealth Secure Area-->
<section class="wealth-secure-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Grow Your Wealth Secure</h2>
            <div class="sub-title">
                <p>Don’t just make a deposit, make an investment today.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="owl-carousel owl-theme thm-owl__carousel wealth-secure-carousel-2 owl-nav-style-one" data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 30,
                            "nav": false,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                            "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 3
                                    },
                                    "1200": {
                                        "items": 4
                                    }
                                }
                            }'>


                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-1.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="#">Trade FX</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Banks trade currencies 24/5 for global transactions, risk management, and liquidity, influencing markets and economies.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style2">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-2.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="#">Multi Currency a/c</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Multi-currency accounts simplify international transactions by allowing funds in various currencies in one account.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style3">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-3.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="#">Mutual Funds</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Mutual funds pool money from investors to diversify and professionally manage investments in stocks, bonds, or securities.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style4">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-4.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Pension Scheme</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Vertexphoenix Pension schemes are retirement savings plans, typically employer-sponsored. you can give it a try.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->


                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-1.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Trade FX</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Beguiled and demoralized by charms pleasure of the moment so blinded by
                                they cannot and trouble.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style2">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-2.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Multi Currency a/c</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Cases are perfectly simple & easy to distinguish in a free hour when power
                                of choice is prevents.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style3">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-3.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Mutual Funds</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>The claims off duty or the obligations business it will frequently occur that
                                pleasures be repudiated.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style4">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-4.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Pension Scheme</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Beguiled and demoralized by charms pleasure of the moment so blinded by
                                they cannot and trouble.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->


                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-1.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Trade FX</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Beguiled and demoralized by charms pleasure of the moment so blinded by
                                they cannot and trouble.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style2">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-2.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Multi Currency a/c</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Cases are perfectly simple & easy to distinguish in a free hour when power
                                of choice is prevents.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style3">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-3.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Mutual Funds</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>The claims off duty or the obligations business it will frequently occur that
                                pleasures be repudiated.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->
                    <!--Start Single Wealth Secure Box-->
                    <div class="single-wealth-secure-box style4">
                        <div class="img-box">
                            <div class="img-box-inner">
                                <img src="assets/images/resources/wealth-secure-4.jpg" alt="">
                            </div>
                            <div class="inner-title">
                                <div class="arrow-top"></div>
                                <div class="arrow-bottom"></div>
                                <h3><a href="user/signup">Pension Scheme</a></h3>
                                <div class="right-arrow-btn">
                                    <a href="user/signup"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Beguiled and demoralized by charms pleasure of the moment so blinded by
                                they cannot and trouble.</p>
                        </div>
                    </div>
                    <!--End Single Wealth Secure Box-->

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Wealth Secure Area-->

<!--Start Features Style2 Area-->
<section class="features-style2-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Emergency Service Requests</h2>
            <div class="sub-title">
                <p>List of banking service requests all in one place.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="features-style2-content">

                    <!--Start Features Style2 Tab-->
                    <div class="features-style2-tab">
                        <!--Start Features Style2 Tab Button-->
                        <div class="features-style2-tab__button">
                            <ul class="owl-carousel owl-theme thm-owl__carousel features-style2-carousel owl-nav-style-one tabs-button-box" data-owl-options='{
                                        "loop": false,
                                        "autoplay": false,
                                        "margin": 0,
                                        "nav": true,
                                        "dots": false,
                                        "smartSpeed": 500,
                                        "autoplayTimeout": 10000,
                                        "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                        "responsive": {
                                                "0": {
                                                    "items": 1
                                                },
                                                "768": {
                                                    "items": 2
                                                },
                                                "992": {
                                                    "items": 3
                                                },
                                                "1200": {
                                                    "items": 4
                                                }
                                            }
                                        }'>

                                <li data-tab="#tabid11" class="tab-btn-item active-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-credit-card"></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Credit / Debit Card<br> Related</a></h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#tabid22" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-computer"></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Mobile / Internet<br> Banking</a></h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#tabid33" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Account Details<br> Changing</a></h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#tabid44" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-check-book"></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Cheque Book / DD<br> Related</a></h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>

                                <li data-tab="#tabid55" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-credit-card"></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Credit / Debit Card<br> Related</a></h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab="#tabid66" class="tab-btn-item clearfix">
                                    <div class="single-features-box-style2">
                                        <div class="icon">
                                            <span class="icon-computer"></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Mobile / Internet<br> Banking</a></h3>
                                        </div>
                                        <div class="arrow-button">
                                            <a href="#">
                                                <span class="icon-chevron"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!--End Features Style2 Tab Button-->

                        <!--Start Tabs Content Box-->
                        <div class="tabs-content-box">
                            <!--Tab-->
                            <div class="tab-content-box-item tab-content-box-item-active" id="tabid11">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Block Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2" data-owl-options='{
                                                                "loop": true,
                                                                "autoplay": false,
                                                                "margin": 0,
                                                                "nav": false,
                                                                "dots": true,
                                                                "smartSpeed": 500,
                                                                "autoplayTimeout": 10000,
                                                                "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                                "responsive": {
                                                                        "0": {
                                                                            "items": 1
                                                                        },
                                                                        "768": {
                                                                            "items": 1
                                                                        },
                                                                        "992": {
                                                                            "items": 1
                                                                        },
                                                                        "1200": {
                                                                            "items": 1
                                                                        }
                                                                    }
                                                                }'>

                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Send a message</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="contact">Contact</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->

                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(assets/images/resources/features-style2-banner-1.jpg);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid22">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Mobile / Internet Banking
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2" data-owl-options='{
                                                                "loop": true,
                                                                "autoplay": false,
                                                                "margin": 0,
                                                                "nav": false,
                                                                "dots": true,
                                                                "smartSpeed": 500,
                                                                "autoplayTimeout": 10000,
                                                                "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                                "responsive": {
                                                                        "0": {
                                                                            "items": 1
                                                                        },
                                                                        "768": {
                                                                            "items": 1
                                                                        },
                                                                        "992": {
                                                                            "items": 1
                                                                        },
                                                                        "1200": {
                                                                            "items": 1
                                                                        }
                                                                    }
                                                                }'>

                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->

                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(assets/images/resources/features-style2-banner-2.jpg);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid33">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Account Details Changing
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2" data-owl-options='{
                                                                "loop": true,
                                                                "autoplay": false,
                                                                "margin": 0,
                                                                "nav": false,
                                                                "dots": true,
                                                                "smartSpeed": 500,
                                                                "autoplayTimeout": 10000,
                                                                "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                                "responsive": {
                                                                        "0": {
                                                                            "items": 1
                                                                        },
                                                                        "768": {
                                                                            "items": 1
                                                                        },
                                                                        "992": {
                                                                            "items": 1
                                                                        },
                                                                        "1200": {
                                                                            "items": 1
                                                                        }
                                                                    }
                                                                }'>

                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->

                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(assets/images/resources/features-style2-banner-3.jpg);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid44">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Cheque Book / DD Related
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2" data-owl-options='{
                                                                "loop": true,
                                                                "autoplay": false,
                                                                "margin": 0,
                                                                "nav": false,
                                                                "dots": true,
                                                                "smartSpeed": 500,
                                                                "autoplayTimeout": 10000,
                                                                "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                                "responsive": {
                                                                        "0": {
                                                                            "items": 1
                                                                        },
                                                                        "768": {
                                                                            "items": 1
                                                                        },
                                                                        "992": {
                                                                            "items": 1
                                                                        },
                                                                        "1200": {
                                                                            "items": 1
                                                                        }
                                                                    }
                                                                }'>

                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->

                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(assets/images/resources/features-style2-banner-4.jpg);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid55">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Cheque Book / DD Related
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2" data-owl-options='{
                                                                "loop": true,
                                                                "autoplay": false,
                                                                "margin": 0,
                                                                "nav": false,
                                                                "dots": true,
                                                                "smartSpeed": 500,
                                                                "autoplayTimeout": 10000,
                                                                "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                                "responsive": {
                                                                        "0": {
                                                                            "items": 1
                                                                        },
                                                                        "768": {
                                                                            "items": 1
                                                                        },
                                                                        "992": {
                                                                            "items": 1
                                                                        },
                                                                        "1200": {
                                                                            "items": 1
                                                                        }
                                                                    }
                                                                }'>

                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->

                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(assets/images/resources/features-style2-banner-1.jpg);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab-content-box-item" id="tabid66">
                                <div class="features-style2-tab-content-box-item">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="features-style2-text-box">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            Cheque Book / DD Related
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Reissue Lost Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Unlock Debit / ATM Card
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Generate Debit Card Pin Number
                                                            <span class="icon-right-arrow"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="features-style2-banner-box">
                                                <div class="text-box">
                                                    <div class="owl-carousel owl-theme thm-owl__carousel features-style2-banner-carousel owl-dot-style2" data-owl-options='{
                                                                "loop": true,
                                                                "autoplay": false,
                                                                "margin": 0,
                                                                "nav": false,
                                                                "dots": true,
                                                                "smartSpeed": 500,
                                                                "autoplayTimeout": 10000,
                                                                "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                                                                "responsive": {
                                                                        "0": {
                                                                            "items": 1
                                                                        },
                                                                        "768": {
                                                                            "items": 1
                                                                        },
                                                                        "992": {
                                                                            "items": 1
                                                                        },
                                                                        "1200": {
                                                                            "items": 1
                                                                        }
                                                                    }
                                                                }'>

                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->
                                                        <!--Start Single Item-->
                                                        <div class="single-item">
                                                            <span class="icon-headphones"></span>
                                                            <h4>Call for</h4>
                                                            <h3>Private Banking</h3>
                                                            <h2>
                                                                <a href="tel:2512353256">+8 (222) 123 456 78</a>
                                                            </h2>
                                                        </div>
                                                        <!--End Single Item-->

                                                    </div>
                                                </div>
                                                <div class="img-box">
                                                    <div class="img-box-bg" style="background-image: url(assets/images/resources/features-style2-banner-1.jpg);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--End Tabs Content Box-->
                    </div>
                    <!--End Features Style2 Tab-->

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Features Style2 Area-->

<!--Start Features Style3 Area-->
<section class="features-style3-area">
    <div class="container">
        <div class="row">

            <div class="col-xl-6">
                <div class="features-style3-img-box">
                    <div class="inner-img">
                        <img class="paroller" src="assets/images/resources/features-style3-img.png" alt="">
                    </div>
                    <div class="icon-holder float-bob-y">
                        <span class="icon-interest-rate"></span>
                    </div>
                    <div class="icon-holder two">
                        <span class="icon-online-shop"></span>
                    </div>
                    <div class="icon-holder three">
                        <span class="icon-theater"></span>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="features-style3-content">
                    <div class="sec-title">
                        <h2>Personalize Your<br> Card and Stand Out<br> From Crowd</h2>
                        <div class="sub-title">
                            <p>Desire that they cannot foresee the pain & trouble that are bound too
                                ensue equal blame belongs through shrinking.</p>
                        </div>
                    </div>
                    <div class="text-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-checkbox-mark"></span>
                                </div>
                                <p>Great explorer of the master-builder</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-checkbox-mark"></span>
                                </div>
                                <p>Great explorer of the master-builder</p>
                            </li>
                        </ul>
                        <div class="apply-credit-card">
                            <h3>Apply for Credit Card</h3>
                            <form id="apply-credit-card" method="post">
                                <div class="input-box">
                                    <input required type="text" name="form_name" value="" placeholder="Name" required="">
                                </div>
                                <div class="button-box">
                                    <button class="btn-one" name="submit" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">Apply Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Features Style3 Area-->

<!--Start Money Exchange Rates Area-->
<section class="money-exchange-value-area">
    <div class="money-exchange-value-area-bg" style="background-image: url(assets/images/backgrounds/money-exchange-value.jpg);"></div>
    <div class="container">
        <div class="sec-title text-center">
            <h2>Foreign Exchange Rates</h2>
            <div class="sub-title">
                <p>Denouncing pleasure & praising pain was born.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="money-exchange-value-tab">

                    <!--Start Money Exchange Value Tab Button-->
                    <div class="money-exchange-value-tab__button">
                        <ul class="tabs-button-box">
                            <li data-tab="#money-send-receive" class="tab-btn-item active-btn-item">
                                <h3>Money Send & Receive</h3>
                            </li>
                            <li data-tab="#load-redeem-forex-card" class="tab-btn-item">
                                <h3>Load & Redeem Forex Card</h3>
                            </li>
                        </ul>
                        <div class="right">
                            <a href="contact"><span class="icon-menu"></span>Click to Get Assistant</a>
                        </div>
                    </div>
                    <!--End Money Exchange Value Tab Button-->

                    <!--Start Tabs Content Box-->
                    <div class="tabs-content-box">
                        <!--Tab-->
                        <div class="tab-content-box-item tab-content-box-item-active" id="money-send-receive">
                            <div class="money-exchange-value-tab-content-box-item">
                                <div class="row">

                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-1.png" alt="">
                                                </div>
                                            </div>
                                            <h3>usd</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>79.89</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>76.54</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-2.png" alt="">
                                                </div>
                                            </div>
                                            <h3>sek</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>8.20</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>7.25</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-3.png" alt="">
                                                </div>
                                            </div>
                                            <h3>gbp</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>101.88</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>96.55</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-4.png" alt="">
                                                </div>
                                            </div>
                                            <h3>jpy</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>62.82</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>58.46</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-5.png" alt="">
                                                </div>
                                            </div>
                                            <h3>aud</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>57.52</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>54.21</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-6.png" alt="">
                                                </div>
                                            </div>
                                            <h3>cad</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>63.41</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>59.75</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->

                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab-content-box-item" id="load-redeem-forex-card">
                            <div class="money-exchange-value-tab-content-box-item">
                                <div class="row">

                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-4.png" alt="">
                                                </div>
                                            </div>
                                            <h3>jpy</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>62.82</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>58.46</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-5.png" alt="">
                                                </div>
                                            </div>
                                            <h3>aud</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>57.52</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>54.21</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-6.png" alt="">
                                                </div>
                                            </div>
                                            <h3>cad</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>63.41</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>59.75</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-1.png" alt="">
                                                </div>
                                            </div>
                                            <h3>usd</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>79.89</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>76.54</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-2.png" alt="">
                                                </div>
                                            </div>
                                            <h3>sek</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>8.20</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>7.25</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->
                                    <!--Start Single Money Exchange Value-->
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <div class="single-money-exchange-value">
                                            <div class="flag-box">
                                                <div class="flag-box-inner">
                                                    <img src="assets/images/resources/flag-3.png" alt="">
                                                </div>
                                            </div>
                                            <h3>gbp</h3>
                                            <ul>
                                                <li>
                                                    <div class="left">
                                                        <p>Send</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>101.88</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="left">
                                                        <p>Receive</p>
                                                        <span>:</span>
                                                    </div>
                                                    <div class="right">
                                                        <p>96.55</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Single Money Exchange Value-->

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End Tabs Content Box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Money Exchange Rates Area-->


<!--Start Faq Style1 Area-->
<?php require_once 'components/faq.php'; ?>
<!--End Faq Style1 Area-->


<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="slogan-content-box">
            <div class="slogan-content-box-bg" style="background-image: url(assets/images/backgrounds/slogan-content-box-bg.jpg);"></div>
            <div class="inner-title">
                <h2>Experience a New Digital World.</h2>
                <p>Mobile banking application with new & exciting features.</p>
            </div>
            <div class="get-app-box">
                <ul>
                    <li>
                        <a href="#">
                            <div class="icon">
                                <span class="icon-play-store"></span>
                            </div>
                            <div class="text">
                                <h4>Download</h4>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="style2" href="#">
                            <div class="icon">
                                <span class="icon-apple"></span>
                            </div>
                            <div class="text">
                                <h4>Download</h4>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End slogan area-->


<!--Start footer area -->
<?php require_once 'components/footer.php'; ?>
<!--End footer area-->
</div>
<!-- /.page-wrapper -->






<?php require_once 'components/mobile-nav.php'; ?>


<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label>
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-search"></i>
            </button>
        </form>
    </div>
</div>


<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <i class="icon-chevron"></i>
</a>


<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="assets/vendors/circleType/jquery.circleType.js"></script>
<script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-migrate/jquery-migrate.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="assets/vendors/odometer/odometer.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/swiper/swiper.min.js"></script>
<script src="assets/vendors/vegas/vegas.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/extra-scripts/jquery.paroller.min.js"></script>
<script src="assets/vendors/language-switcher/jquery.polyglot.language.switcher.js"></script>

<!-- Template js -->
<script src="assets/js/custom.js"></script>


</body>

</html>