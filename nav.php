<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvan Exim</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="image/logo/logo.png" type="image/png">
    <!--====== Google Fonts ======-->


    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--====== magnific-popup css ======-->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/dist/magnific-popup.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="assets/vendor/slick/slick.css">
    <!--====== Jquery UI css ======-->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  -->
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.tiltedpage-scroll.js"></script>
    <link href='tiltedpage-scroll.css' rel='stylesheet' type='text/css'>
    <!--  -->
</head>

<body>
    <script>
        $(document).ready(function () {
            $(".main").tiltedpage_scroll({
                angle: 20
            });
        });

    </script>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div><!--====== End Preloader ======-->
    <!--====== Search From ======-->
    <div class="modal fade search-modal" id="search-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="form_group">
                        <input type="text" class="form_control" placeholder="Search here" name="search">
                        <label><i class="fa fa-search"></i></label>
                    </div>
                </form>
            </div>
        </div>
    </div><!--====== Search From ======-->
    <!--====== Sidebar Wrapper ======-->
    <div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <button class="close" data-dismiss="modal"><i class="far fa-times"></i></button>
                <div class="sidebar-wrapper">
                    <div class="sidebar-information-area">
                        <div class="row no-gutters">
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <a href="index.html" class="footer-logo"><img src="image/logo/logo.png"
                                            alt="Brand Logo"></a>
                                    <p>Sed ut perspiciatis unde omni natus voluptatem accusantium doloremque laudantium
                                        aperia maquep quae abillo
                                        inventore veritatis architecto</p>
                                    <div class="social-item">
                                        <h6>Follow Us</h6>
                                        <ul class="social-link">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <h4 class="title">Get In Touch</h4>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-map-marker-alt"></i>Location</h6>
                                        <p>558 Main Street, 2nd Block
                                            Melbourne, Australia</p>
                                    </div>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-envelope-open"></i>Email Us</h6>
                                        <p><a href="mailto:support@gmail.com">support@gmail.com</a></p>
                                    </div>
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-phone-plus"></i>Hotline</h6>
                                        <p><a href="tel:+000(123)45688">+000 (123) 456 88</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 sidebar-widget">
                                <div class="sidebar-info-widget">
                                    <h4 class="title">Newsletter</h4>
                                    <form>
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address"
                                                required>
                                            <button class="main-btn secondary-btn">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-gallery pt-80">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="assets/images/gallery/sgl-1.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="assets/images/gallery/sgl-1.jpg" class="img-popup icon-btn"><i
                                                    class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="assets/images/gallery/sgl-2.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="assets/images/gallery/sgl-2.jpg" class="img-popup icon-btn"><i
                                                    class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="assets/images/gallery/sgl-3.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="assets/images/gallery/sgl-3.jpg" class="img-popup icon-btn"><i
                                                    class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="assets/images/gallery/sgl-4.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="assets/images/gallery/sgl-4.jpg" class="img-popup icon-btn"><i
                                                    class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="assets/images/gallery/sgl-5.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="assets/images/gallery/sgl-6.jpg" class="img-popup icon-btn"><i
                                                    class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="single-gallery-item">
                                    <div class="gallery-img">
                                        <img src="assets/images/gallery/sgl-6.jpg" alt="Gallery Image">
                                        <div class="hover-overlay">
                                            <a href="assets/images/gallery/sgl-6.jpg" class="img-popup icon-btn"><i
                                                    class="far fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--====== Sidebar Wrapper ======-->
    <!--====== Start Header ======-->
    <header class="header-area header-two">
        <div class="container-fluid">
            <!--====== Header Top Bar ======-->
            <div class="header-top-bar text-white main-bg d-none d-xl-block">
                <div class="row">
                    <div class="col-lg-8">
                        <!--====== Top Left ======-->
                        <div class="top-left">
                            <marquee behavior="" direction="">
                                <span>At Suvan Exim, quality is not just a promise—it is the foundation of everything we
                                do.</span>
                            </marquee>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!--====== Top Right ======-->
                        <div class="top-right float-lg-right">
                            <ul class="social-link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Header Middle ======-->
            <div class="header-middle d-none d-xl-block py-3">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!--====== Information Wrapper ======-->
                        <div class="information-wrapper">
                            <div class="row">
                                <div class="col-lg-4">
                                    <!--====== Single Information Item ======-->
                                    <div class="single-information-item">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="info">
                                            <span>Locations</span>
                                            <h5>Gujarat – 364001
                                                India</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <!--====== Single Information Item ======-->
                                    <div class="single-information-item">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope-circle-check"></i>
                                        </div>
                                        <div class="info">
                                            <span>Email Us</span>
                                            <h5><a href="mailto:info@suvanexim.com">info@suvanexim.com</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <!--====== Single Information Item ======-->
                                    <div class="single-information-item">
                                        <div class="icon">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <div class="info">
                                            <span>Hotline</span>
                                            <h5><a href="tel:+91 97141 46633">+91 97141 46633</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--====== Header Navigation ======-->
            <div class="header-navigation">
                <div class="nav-overlay"></div>
                <div class="primary-menu">
                    <!--====== Site Branding ======-->
                    <div class="site-branding">
                        <a href="/" class="brand-logo"><img src="image/logo/logo.png" alt="Site Logo"></a>
                        <a href="/" class="sticky-logo"><img src="image/logo/logo.png" alt="Site Logo"></a>
                    </div>
                    <!--====== Nav Menu ======-->
                    <div class="nav-menu">
                        <!--====== Site Branding ======-->
                        <div class="mobile-logo mb-30 d-block d-xl-none">
                            <a href="/" class="brand-logo"><img src="image/logo/logo.png" alt="Site Logo"></a>
                        </div>
                        <!--=== Nav Search ===-->
                        <!-- <div class="nav-search mb-30 d-block d-xl-none ">
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Search Here" name="email"
                                        required>
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div> -->
                        <!--====== main Menu ======-->
                        <nav class="main-menu  ">
                            <ul>
                                <!-- <li class="menu-item has-children"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                    </ul>
                                </li> -->
                                <li class="menu-item"><a href="/">Home</a></li>
                                <li class="menu-item"><a href="about.php">About Us</a></li>
                                <li class="menu-item"><a href="products.php">Diversify Products </a></li>

                                <li class="menu-item has-children"><a href="#">Our Products <i
                                            class="fa-solid fa-angles-right"></i></a>
                                    <ul class="sub-menu">
                                      <?php
                                            include "config.php";

                                            $sel = "SELECT * from `pro`";
                                            $q = mysqli_query($con, $sel);
                                            while ($row = mysqli_fetch_array($q)) {
                                            ?>
                                        <li><a href="singal-product.php?slug=<?php echo $row['slug'] ?>"><?php echo $row['name'] ?></a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="services.php">Our Services</a></li>

                                <li class="menu-item"><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                        <!--====== Menu Button ======-->

                    </div>
                    <!--====== Nav Right Item ======-->
                    <div class="nav-right-item">


                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--====== End Header ======-->
    <!--====== Start Banner Section ======-->




