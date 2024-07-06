<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SF2 Stay Fit Forever | <?= ucfirst(@$is_active) ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="SF2 Stay Fit Forever">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/icons/favicon.png" type="image/x-icon">

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
    <style>
        .grid-item {
            padding: 2.4%;
        }

        .grid-item img {
            box-shadow: 6px 6px 15px 3px rgba(0, 0, 0, 0.5);
            /* Basic shadow */
            border-radius: 3%;

        }
    </style>


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
                        <p><a class="text-dark" href="https://maps.app.goo.gl/8nbr71CVX4JNyUWd7">702, A4B
                                Siddhivinayak Ginger
                                Pimple Saudagar
                                Pune, Maharashtra</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block p-0">
                    <div class="header-info">
                        <i class="material-icons">phone</i>
                        <a href="tel:+919033902823" class="text-dark">+91 90339 02823</a> , <a href="tel:+919158394180" class="text-dark">+91 91583 94180</a>
                    </div>
                </div>


                <div class="col-md-3 text-left text-md-right p-0">
                    <div class="header-info d-none d-md-inline-flex">
                        <i class="material-icons">alarm_on</i>
                        <p>Mon - Sat: 7:00am - 10:00pm</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-bottom">
            <a href="<?= base_url() ?>" class="site-logo">
                <img src="<?= base_url() ?>assets/img/logo1.png" alt="" width="200px">
            </a>

            <div class="container">
                <ul class="main-menu">
                    <li><a class="<?= $is_active == "home" ? "active" : "" ?>" href="<?= base_url('/') ?>">Home</a></li>
                    <li><a class="<?= $is_active == "about" ? "active" : "" ?>" href="<?= base_url('about') ?>">About</a></li>
                    <li><a class="<?= $is_active == "services" ? "active" : "" ?>" href="<?= base_url('services') ?>">Services</a></li>
                    <li><a class="<?= $is_active == "gallery" ? "active" : "" ?>" href="<?= base_url('gallery') ?>">Gallery</a></li>
                    <li><a class="<?= $is_active == "calculator" ? "active" : "" ?>" href="<?= base_url('calculator') ?>">calculator</a></li>
                    <li><a class="<?= $is_active == "contact" ? "active" : "" ?>" href="<?= base_url('contact') ?>">Contact</a></li>
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
                                <p>SF2.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/2.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>SF2.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/3.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>SF2.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/4.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>SF2.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/5.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>SF2.yoga</p>
                            </div>
                        </div>
                    </div>
                    <div class="insta-item">
                        <div class="insta-img">
                            <img src="<?= base_url() ?>assets/img/infor/6.jpg" alt="">
                            <div class="insta-hover">
                                <i class="fa fa-instagram"></i>
                                <p>SF2.yoga</p>
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
                    <p>SF2.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/2.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>SF2.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/3.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>SF2.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/4.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>SF2.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/5.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>SF2.yoga</p>
                </div>
            </div>
            <div class="gs-item">
                <img src="<?= base_url() ?>assets/img/gallery/6.jpg" alt="">
                <div class="gs-hover">
                    <i class="fa fa-instagram"></i>
                    <p>SF2.yoga</p>
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
                            <img src="<?= base_url() ?>assets/img/logo4.png" alt="">
                            <ul>
                                <li><i class="material-icons">phone</i><a href="tel:+919033902823" class="text-dark">+91 90339 02823</a> , <a href="tel:+919158394180" class="text-dark">+91 91583 94180</a>
                                </li>
                                <li><i class="material-icons">email</i> <a class="text-dark" href="mailto:bhumika.sf2stayfitforever@gmail.com">bhumika.sf2stayfitforever@gmail.com</a></li>
                                <li><i class="material-icons">map</i><a class="text-dark" href="https://maps.app.goo.gl/8nbr71CVX4JNyUWd7">702, A4B
                                        Siddhivinayak Ginger
                                        Pimple Saudagar
                                        Pune, Maharashtra</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget pl-0 pl-lg-5">
                        <h2 class="fw-title">Company</h2>
                        <ul>
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="<?= base_url("gallery") ?>">Gallery</a></li>
                            <li><a href="<?= base_url("contact") ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h2 class="fw-title">About Us</h2>
                        <ul>
                            <li><a href="<?= base_url("about") ?>">About Us</a></li>
                            <li><a href="<?= base_url("services") ?>">Service</a></li>
                            <li><a href="<?= base_url("calculator") ?>">Calculator</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget pl-0 pl-lg-5">
                        <h2 class="fw-title">Open time</h2>
                        <ul>
                            <li><i class="material-icons">alarm_on</i>Mon - Sat: 7:00am - 10:00pm</li>
                        </ul>
                        <form class="infor-form ">
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
                        <div class="copyright">
                            &copy; All Right Resrved by Sf2 <?= date("Y") ?>
                        </div>
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