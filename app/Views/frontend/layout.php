<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Ahana | Yoga HTML Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Ahana Yoga HTML Template">
    <meta name="keywords" content="yoga, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slicknav.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />


    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section -->
    <header class="header-section">
        <div class="header-top">
            <div class="row m-0">
                <div class="col-md-6 d-none d-md-block p-0">
                    <div class="header-info">
                        <i class="material-icons">map</i>
                        <p>184 Main Collins Street</p>
                    </div>
                    <div class="header-info">
                        <i class="material-icons">phone</i>
                        <p>(965) 436 3274</p>
                    </div>
                </div>
                <div class="col-md-6 text-left text-md-right p-0">
                    <div class="header-info d-none d-md-inline-flex">
                        <i class="material-icons">alarm_on</i>
                        <p>Mon - Fri: 6:30am - 07:45pm</p>
                    </div>
                    <!-- <div class="header-info">
                        <i class="material-icons">language</i>
                        <select id="language" class="language-select">
                            <option data-display="Language">EN</option>
                            <option data-display="Language" value="1">ES</option>
                            <option data-display="Language" value="2">JA</option>
                            <option data-display="Language" value="2">AR</option>
                        </select>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <a href="index.html" class="site-logo">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="">
            </a>
            <div class="hb-right">
                <div class="hb-switch" id="search-switch">
                    <img src="<?= base_url() ?>assets/img/icons/search.png" alt="">
                </div>
                <div class="hb-switch" id="infor-switch">
                    <img src="<?= base_url() ?>assets/img/icons/bars.png" alt="">
                </div>
            </div>
            <div class="container">
                <ul class="main-menu">
                    <li><a href="<?= base_url('/') ?>" class="active">Home</a></li>
                    <li><a href="<?= base_url('about') ?>">About</a></li>
                    <li><a href="<?= base_url('services') ?>">Services</a></li>
                    <li><a href="<?= base_url('calculator') ?>">calculator</a></li>
                    <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Header Section end -->

    <!-- Infor Model -->
    <div class="infor-model-warp">
        <div class="infor-model d-flex align-items-center">
            <div class="infor-close">
                <i class="material-icons">close</i>
            </div>
            <div class="infor-middle">
                <a href="#" class="infor-logo">
                    <img src="<?= base_url() ?>assets/img/logo-2.png" alt="">
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                <div class="insta-imgs">
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/1.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>ahana.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/2.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>ahana.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/3.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>ahana.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/4.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>ahana.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/5.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>ahana.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/6.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>ahana.yoga</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <form class="infor-form">
                    <input type="text" placeholder="Your Email">
                    <button><img src="<= base_url() ?>assets/img/icons/send.png" alt=""></button>
                </form> -->
                <div class="insta-social">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Infor Model end -->

    <?= $this->renderSection("body-contents") ?>

    <!-- Gallery Section -->
    <div class="gallery-section">
        <div class="gallery-slider owl-carousel">
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/1.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>ahana.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/2.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>ahana.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/3.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>ahana.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/4.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>ahana.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/5.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>ahana.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/6.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>ahana.yoga</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section end -->

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="about-widget">
                            <img src="<?= base_url() ?>assets/img/logo-3.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit sed.</p>
                            <ul>
                                <li><i class="material-icons">phone</i>(965) 436 3274</li>
                                <li><i class="material-icons">email</i>ahana.yoga@gmail.com</li>
                                <li><i class="material-icons">map</i>184 Main Collins Street</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget pl-0 pl-lg-5">
                        <h2 class="fw-title">Company</h2>
                        <ul>
                            <li><a href="#">Online Education</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Special Issues</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h2 class="fw-title">About Us</h2>
                        <ul>
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Introduce</a></li>
                            <li><a href="#">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget pl-0 pl-lg-5">
                        <h2 class="fw-title">Open time</h2>
                        <ul>
                            <li><i class="material-icons">alarm_on</i>Mon - Fri: 6:30am - 07:45pm</li>
                            <li><i class="material-icons">alarm_on</i>Sat - Sun: 8:30am - 05:45pm</li>
                        </ul>
                        <form class="infor-form">
                            <input type="text" placeholder="Your Email">
                            <button><img src="<?= base_url() ?>assets/img/icons/send.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 text-md-right">
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section end -->

    <div class="back-to-top"><img src="<?= base_url() ?>assets/img/icons/up-arrow.png" alt=""></div>

    <!-- Search model -->
    <div class="search-model set-bg" data-setbg="img/search-bg.jpg">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="material-icons">close</i></div>
            <form class="search-moderl-form">
                <input type="text" id="search-input" placeholder="Search">
                <button><img src="<?= base_url() ?>assets/img/icons/search-2.png" alt=""></button>
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="<?= base_url() ?>assets/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.slicknav.min.js"></script>
    <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>