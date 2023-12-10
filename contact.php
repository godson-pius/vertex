<?php require_once 'components/header.php'; ?>
<?php
    if (isset($_POST['submit'])) {
        echo "<script>alert('Message received! Our support team will respond as soon as possible.')</script>";
    }
?>


<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url(assets/images/backgrounds/breadcrumb-area-bg-6.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                        <h2>Get In Touch</h2>
                    </div>
                    <div class="breadcrumb-menu" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Get In Touch</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!--Start Main Contact Form Area-->
<section class="main-contact-form-area">
    <div class="container">
        <div class="row">

            <div class="col-xl-6">
                <div class="contact-info-box-style1">
                    <div class="box1"></div>
                    <div class="title">
                        <h2>Get Support for<br> any Queries or Complaints</h2>
                        <p>Committed to helping you meet all your banking needs.</p>
                    </div>

                    <ul class="contact-info-1">
                        <li>
                            <div class="icon">
                                <span class="icon-map"></span>
                            </div>
                            <div class="text">
                                <p>Corporate Office</p>
                                <h3>141, First Floor, 12 St RootsTerrace,<br>
                                    Los Angeles USA 90010.</h3>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-clock"></span>
                            </div>
                            <div class="text">
                                <p>Office Hours</p>
                                <h3>Mon - Fri: 9.00am to 5.00pm</h3>
                                <span>[2nd Sat Holiday]</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="text">
                                <p>Front Desk</p>
                                <h3><a href="tel:123456789">+61 3 8376 6284</a></h3>
                                <h3><a href="mailto:yourmail@email.com">supportyou@vertexphoenix.com</a></h3>
                            </div>
                        </li>
                    </ul>

                    <div class="bottom-box">
                        <div class="btn-box">
                            <a href="#"><i class="fas fa-arrow-down"></i> Customer Care</a>
                        </div>
                        <div class="footer-social-link-style1">
                            <ul class="clearfix">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-xl-6">
                <div class="contact-form">
                    <form id="contact-form" class="default-form2" method="post">

                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-box">
                                <input required type="text" name="form_name" id="formName" placeholder="xxxxxx" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-box">
                                <input required type="email" name="form_email" id="formEmail" placeholder="" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <div class="input-box">
                                <input required type="text" name="form_phone" value="" id="formPhone" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <div class="input-box">
                                <input required type="text" name="form_subject" value="" id="formSubject" placeholder="Subject">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <div class="input-box">
                                <textarea name="form_message" id="formMessage" placeholder="" required=""></textarea>
                            </div>
                        </div>

                        <div class="button-box">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="btn-one" name="submit" type="submit" data-loading-text="Please wait...">
                                <span class="txt">
                                    send a message
                                </span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Main Contact Form Area-->

<!--Google Map Start-->
<section class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9584852.972428268!2d-15.000387644722474!3d54.09055348363434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2sng!4v1702119345938!5m2!1sen!2sng" class="google-map__one" allowfullscreen></iframe>

    <div class="google-map-content-box">
        <div class="branch-atm-tab">
            <!--Start Branch Atm Tab Buttom-->
            <div class="branch-atm-tab__button">
                <ul class="tabs-button-box">
                    <li data-tab="#branch" class="tab-btn-item active-btn-item">
                        <h5>Branch</h5>
                    </li>
                    <li data-tab="#atm" class="tab-btn-item">
                        <h5>atm</h5>
                    </li>
                </ul>
                <div class="location-search-box">
                    <div class="location-search-box__inner">
                        <form class="search-form" action="#">
                            <div class="input-box">
                                <input placeholder="Enter Your Location" type="text">
                                <div class="icon">
                                    <span class="icon-map"></span>
                                </div>
                            </div>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--End Branch Atm Tab Buttom-->

            <!--Start Tabs Content Box-->
            <div class="tabs-content-box">
                <!--Tab-->
                <div class="tab-content-box-item tab-content-box-item-active" id="branch">
                    <div class="branch-atm-tab-content-box-item">
                        <div class="inner-title">
                            <h3>Vertexphoenix,<br> United Kingdom</h3>
                        </div>
                        <ul>
                            <li>
                                <h3>Address</h3>
                                <p>24/7, 1st Floor Global Str, 2nd Cross,<br> SF 94112.</p>
                            </li>
                            <li>
                                <h3>Phone & Email</h3>
                                <p><a href="tel:123456789">+415 67 890 12</a></p>
                                <p><a href="mailto:yourmail@email.com">support@vertexphoenix.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Tab-->
                <div class="tab-content-box-item" id="atm">
                    <div class="branch-atm-tab-content-box-item">
                        <div class="inner-title">
                            <h3>Alabama, 23/8<br> West North Central</h3>
                        </div>
                        <ul>
                            <li>
                                <h3>Arizona</h3>
                                <p>finbif1234</p>
                            </li>
                            <li>
                                <h3>Address</h3>
                                <p>24/7, 1st Floor Global Str, 2nd Cross,<br> SF 94112.</p>
                            </li>
                            <li>
                                <h3>Phone & Email</h3>
                                <p><a href="tel:123456789">+415 67 890 12</a></p>
                                <p><a href="mailto:yourmail@email.com">support@finbank1234.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Tabs Content Box-->

        </div>
    </div>

</section>
<!--Google Map End-->

<!--Start Customer Care Numbers Area-->
<section class="customer-care-numbers-area">
    <div class="container">
        <div class="title-box">
            <h2>Customer Care Numbers</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="customer-care-numbers-tab">

                    <div class="customer-care-numbers-tab__button">
                        <ul class="tabs-button-box clearfix">
                            <li data-tab="#personal-banking" class="tab-btn-item active-btn-item">
                                <h4>Personal Banking</h4>
                            </li>
                            <li data-tab="#corporate-banking" class="tab-btn-item">
                                <h4>Corporate Banking</h4>
                            </li>
                        </ul>
                    </div>

                    <!--Start Tabs Content Box-->
                    <div class="tabs-content-box">
                        <!--Tab-->
                        <div class="tab-content-box-item tab-content-box-item-active" id="personal-banking">

                            <div class="customer-care-numbers-tab-content-box-item">
                                <div class="customer-care-numbers-table-box">
                                    <div class="table-outer">
                                        <table class="customer-care-numbers-table">
                                            <thead class="header">
                                                <tr>
                                                    <th>Service</th>
                                                    <th>Contact Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="inner-title">
                                                        <h3>General Query/Complaint</h3>
                                                    </td>
                                                    <td class="contact-info">
                                                        <ul>
                                                            <li>
                                                                <a href="tel:2512353256">+844 123 4567 89</a>
                                                                <span>(Toll Free)</span>
                                                            </li>
                                                            <li>
                                                                <a class="color2" href="mailto:yourmail@email.com">customercare@vertexphoenix.com</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--Tab-->
                        <div class="tab-content-box-item" id="corporate-banking">

                            <div class="customer-care-numbers-tab-content-box-item">
                                <div class="customer-care-numbers-table-box">
                                    <div class="table-outer">
                                        <table class="customer-care-numbers-table">
                                            <thead class="header">
                                                <tr>
                                                    <th>Service</th>
                                                    <th>Contact Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="inner-title">
                                                        <h3>General Query/Complaint</h3>
                                                    </td>
                                                    <td class="contact-info">
                                                        <ul>
                                                            <li>
                                                                <a href="tel:2512353256">+844 123 4567 89</a>
                                                                <span>(Toll Free)</span>
                                                            </li>
                                                            <li>
                                                                <a class="color2" href="mailto:yourmail@email.com">customercare@vertexphoenix.com</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                             
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Customer Care Numbers Area-->


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