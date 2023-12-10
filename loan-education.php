<?php require_once 'components/header.php'; ?>
<?php
    if (isset($_POST['submit'])) {
        echo "<script>alert('Application received! Stay tuned for a call from our loan support team.')</script>";
    }
?>


<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url(assets/images/backgrounds/breadcrumb-area-bg-4.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                        <h2>Education Loan</h2>
                    </div>
                    <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Education Loan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->



<!--Start Applying Process Area-->
<section class="applying-process-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Explore and Apply Now</h2>
            <div class="sub-title">
                <p>Customised soutions for all your banking needs.</p>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-12">
                <div class="applying-process-step-box-top"></div>
            </div>
            <!--Start Single Applying Process box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-applying-process-box">
                    <div class="applying-process-single-step-box">01</div>
                    <h3>Apply Here</h3>
                    <p>Perfectly provide neccesary details for loan application.</p>
                </div>
            </div>
            <!--End Single Applying Process box-->
            <!--Start Single Applying Process box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-applying-process-box">
                    <div class="applying-process-single-step-box">02</div>
                    <h3>Get Call Back</h3>
                    <p>Get a call from our loan support team in order to process application</p>
                </div>
            </div>
            <!--End Single Applying Process box-->
            <!--Start Single Applying Process box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-applying-process-box">
                    <div class="applying-process-single-step-box">03</div>
                    <h3>Process Your Request</h3>
                    <p>Complete Vertexphoenix loan via the instruction given from the support team</p>
                </div>
            </div>
            <!--End Single Applying Process box-->
        </div>
    </div>
</section>
<!--End Applying Process Area-->

<!--Start Apply Form Area-->
<section class="apply-form-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="apply-form-box clearfix">
                    <div class="apply-form-box-bg" style="background-image: url(assets/images/resources/apply-form-box-bg.jpg);"></div>
                    <div class="apply-form-box__content">
                        <div class="sec-title">
                            <h2>Send Your Request &<br> Get Call Back</h2>
                            <div class="sub-title">
                                <p>Fill all the necessary details and Get call from experts.</p>
                            </div>
                        </div>

                        <form id="apply-form" class="default-form2" method="post">

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input required type="text" name="form_name" id="formName" placeholder="Your Name" required="">
                                            <div class="icon">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input required type="email" name="form_email" id="formEmail" placeholder="Email" required="">
                                            <div class="icon">
                                                <i class="fas fa-envelope-open"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input required type="text" name="form_phone" value="" id="formPhone" placeholder="Phone">
                                            <div class="icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="select-box clearfix">
                                            <select class="wide">
                                                <option data-display="State">
                                                    State
                                                </option>
                                                <option value="1">Alaska</option>
                                                <option value="2">Florida</option>
                                                <option value="3">Georgia</option>
                                                <option value="4">Indiana</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="select-box clearfix">
                                            <select class="wide">
                                                <option data-display="City">
                                                    City
                                                </option>
                                                <option value="1">Alaska</option>
                                                <option value="2">Florida</option>
                                                <option value="3">Georgia</option>
                                                <option value="4">Indiana</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input required type="text" name="date" placeholder="Date" id="datepicker">
                                            <div class="icon">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <button class="btn-one" name="submit" type="submit">
                                            <span class="txt">
                                                Send Request
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Apply Form Area-->



<!--Start Partner Area-->
<section class="partner-area">
    <div class="container">
        <div class="partner-area__sec-title">
            <h3>Corporate Partnership With</h3>
        </div>
        <div class="brand-content">
            <div class="owl-carousel owl-theme thm-owl__carousel partner-carousel" data-owl-options='{
                        "loop": false,
                        "autoplay": true,
                        "margin": 25,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 3
                                },
                                "992": {
                                    "items": 4
                                },
                                "1200": {
                                    "items": 6
                                }
                            }
                        }'>

                <!--Start Single Partner Logo Box-->
                <div class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-1-1.png" alt="Awesome Image"></a>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-1-2.png" alt="Awesome Image"></a>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-1-3.png" alt="Awesome Image"></a>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-1-4.png" alt="Awesome Image"></a>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-1-5.png" alt="Awesome Image"></a>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="single-partner-logo-box">
                    <a href="#"><img src="assets/images/brand/brand-1-6.png" alt="Awesome Image"></a>
                </div>
                <!--End Single Partner Logo Box-->
            </div>
        </div>
    </div>
</section>
<!--End Partner Area-->



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
            <input required type="text" id="search" placeholder="Search Here..." />
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
<script src="assets/vendors/aos/aos.js"></script>

<!-- Template js -->
<script src="assets/js/custom.js"></script>


</body>

</html>