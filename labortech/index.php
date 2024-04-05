<?php

@include 'conn.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/template/labortech/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 06:26:55 GMT -->
<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, rtl, Laboratory, medical" />
<meta name="description" content="Laboratory & Science Research HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title -->
<title>Labortech - Laboratory & Science Research </title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- inject css start -->

<!--== bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--== fonts -->
<link href="https://fonts.googleapis.com/css2?family=Livvic:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,900&amp;display=swap" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet"> 

<!--== animate -->
<link href="css/animate.css" rel="stylesheet" type="text/css" />

<!--== line-awesome -->
<link href="css/line-awesome.min.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl.carousel -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />

<!--== lightslider -->
<link href="css/lightslider.min.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="css/base.css" rel="stylesheet" type="text/css" />

<!--== shortcodes -->
<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

<!--== spacing -->
<link href="css/spacing.css" rel="stylesheet" type="text/css" />

<!--== style -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--== color-customizer -->
<link href="#" data-style="styles" rel="stylesheet">
<link href="css/color-customize/color-customizer.css" rel="stylesheet" type="text/css" />

<!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="clear-loader d-flex align-items-center justify-content-center">
    <div class="loader">
     <span class="plus"></span>
    <span class="plus"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    </div>
  </div>
</div>

<!-- preloader end -->


<!--header start-->


<header id="site-header" class="header">
  <div class="header-top light-bg">
    <div class="container-fluid px-lg-8">
      <div class="row">
        <div class="col d-flex align-items-center justify-content-between">
          <div class="topbar-link d-flex align-items-center text-black">
            <div class="d-none d-sm-flex align-items-center me-3">
              <div> <i class="las la-phone"></i>
              </div>
              <div>Emergency Line: <a class="text-black" href="tel:+912345678900"> +91-234-567-8900</a>
              </div>
            </div>
            <div class="d-none d-md-flex align-items-center me-3">
              <div> <i class="las la-map-marker"></i>
              </div>
              <div>
                <div>Location: Country USA</div>
              </div>
            </div>
            <div class="d-none d-lg-flex align-items-center">
              <div> <i class="las la-business-time"></i>
              </div>
              <div>
                <div>Mon-Sat: 9.30am To 7.00pm</div>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center"> <a class="btn btn-white btn-sm py-3" href="logout.php"><span>Logout</span></a>
            <div class="social-icons d-none d-lg-inline-block ms-3">
              <ul class="list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
            <div class="language-selection ms-3">
              <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">English</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">English</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Arabic</a>
                  </li>
                  <li><a class="dropdown-item" href="#">French</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Italian</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="header-wrap">
    <div class="container-fluid px-lg-8">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index.php">
              <img id="logo-img" class="img-fluid" src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto me-auto position-relative">
                <!-- Home -->
                <li class="nav-item dropdown"> <a class="nav-link active " href="index.php" data-bs-toggle="">Home</a>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="" href="about-us.html">About Us</a>
                      
                    </li>
                    <li class="dropdown-submenu"><a class="" href="team.html">Team</a>
                    </li>
                    <li class="dropdown-submenu"><a class="" href="contact.php">Contact Us</a>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Element</a>
                      <ul class="dropdown-menu">
                        <li><a href="appointment.php">Appointment</a>
                        </li>
                        <li> <a href="shortcode-counter.html">Counter</a>
                        </li>
                        <li> <a href="shortcode-feature.html">Feature Box</a>
                        </li>
                        <li> <a href="shortcode-progress-bar.html">Progress Bar</a>
                        </li>
                        <li> <a href="shortcode-services.html">Services</a>
                        </li>
                        <li> <a href="shortcode-team.html">Team</a>
                        </li>
                        <li> <a href="shortcode-testimonial.html">Testimonial</a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Utilities</a>
                      <ul class="dropdown-menu">
                        <li><a href="faq.html">Faq</a>
                        </li>
                        <li><a href="coming-soon.html">Coming Soon</a>
                        </li>
                        <li><a href="error-404.html">404 Error</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                  <ul class="dropdown-menu">
                    <li><a href="product-cart.php">Product</a>
                    </li>
                    <li><a href="cart.php">Cart</a>
                    </li>
                    <li><a href="checkout.php">Checkout</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                  <ul class="dropdown-menu">
                    <li><a href="pathologycam-testing.html">Pathologycam Testing</a>
                    </li>
                    <li><a href="biochemistry-solution.html">Biochemistry Solution</a>
                    </li>
                    <li><a href="chemical-research.html">Chemical Research</a>
                    </li>
                    <li><a href="pharmaceutical-research.html">Pharmaceutical Research</a>
                    </li>
                    <li><a href="diabetes-testing.html">Diabetes Testing</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item "> <a class="nav-link " href="research.html" >
                      Research
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">News</a>
                  <ul class="dropdown-menu">                 
                    <li><a href="blog-single.html">Blog</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="right-nav align-items-center d-flex justify-content-end">
              <div class="search-icon d-sm-inline-block d-none"> <a id="search" href="javascript:void(0)"><i class="las la-search"></i></a>
              </div>
              <div class="ms-sm-3 me-md-5">
                <div class="cart">
                  <a href="checkout.php" id="header-cart-btn"> <span class="white-bg px-2 py-1 shadow-sm" data-cart-items="2">
                  <i class="las la-shopping-cart"></i>
                </span>
                  </a>
                </div>
              </div> <a class="btn btn-theme btn-sm d-none d-md-inline-block" href="appointment.php"><span>Appointment</span></a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<!--header end-->


<!--hero section start-->

<section class="banner p-0 pos-r fullscreen-banner">
  <div class="banner-slider owl-carousel no-pb" data-dots="false" data-nav="true">
    <div class="item hero-overlay" data-bg-img="images/bg/02.jpg" data-overlay="6">
      <div class="align-center pt-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-10 col-12">
              <h1 class="mb-4 text-black">Research & Verify <span class="text-theme">Laboratory</span> for Testing</h1>
              <p class="lead font-w-5 text-black">Labortech is modern laboratory services Delivering newer flows by their place website is the first impression.</p>
              <div class="btn-box mt-5">
                <a class="btn btn-theme" href="about-us.html"> <span>More About</span>
                </a>
                <a class="btn btn-dark" href="appointment.php"> <span>Book Appointment</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item hero-overlay" data-bg-img="images/bg/05.jpg" data-overlay="6">
      <div class="align-center pt-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-10 col-12">
              <h1 class="mb-4 text-black">Research & Verify <span class="text-theme">Laboratory</span> for Testing</h1>
              <p class="lead font-w-5 text-black">Labortech is modern laboratory services Delivering newer flows by their place website is the first impression.</p>
              <div class="btn-box mt-5">
                <a class="btn btn-theme" href="about-us.html"> <span>More About</span>
                </a>
                <a class="btn btn-dark" href="#"> <span>Book Appointment</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

<!--feature start-->

<section class="pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="featured-item style-1">
          <div class="featured-icon"> <i class="flaticon-laboratory-1"></i>
          </div>
          <div class="featured-title">
            <h5>High-End Latest Technology</h5>
          </div>
          <div class="featured-desc">
            <p>Our firm is expert to create an efficient user interface that.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-5 mt-sm-0">
        <div class="featured-item style-1 active">
          <div class="featured-icon"> <i class="flaticon-laboratory"></i>
          </div>
          <div class="featured-title">
            <h5>Medical laboratory Technician</h5>
          </div>
          <div class="featured-desc">
            <p>Our firm is expert to create an efficient user interface that.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
        <div class="featured-item style-1">
          <div class="featured-icon"> <i class="flaticon-biology-1"></i>
          </div>
          <div class="featured-title">
            <h5>Highest Quality Pathologycam Testing</h5>
          </div>
          <div class="featured-desc">
            <p>Our firm is expert to create an efficient user interface that.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
        <div class="featured-item style-1">
          <div class="featured-icon"> <i class="flaticon-help-call"></i>
          </div>
          <div class="featured-title">
            <h5>Emergency Help Available 24/7</h5>
          </div>
          <div class="featured-desc">
            <p>Our firm is expert to create an efficient user interface that.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--feature end-->


<!--about start-->

<section>
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-12 order-lg-1">
        <img class="img-fluid" src="images/about/01.jpg" alt="">
      </div>
      <div class="col-lg-7 col-12 mt-6 mt-lg-0">
        <div class="row align-items-end">
          <div class="col-md-7">
            <div class="section-title">
              <h2 class="title">We Employ Latest Research Technology & Company</h2> 
              <p class="text-black font-w-5 mb-3">We’re here to care for you and your entire family doctor will general health!</p>
              <p>Our doctors include highly qualified male and female practitioners who come from a range of backgrounds and bring a diversity of skills.</p>
            </div>
            <a class="btn btn-theme" href="about-us.html"> <span>More About</span>
            </a>
          </div>
          <div class="col-md-5 mt-6 mt-md-0">
            <p class="mb-4">Our administration and support staff all have exceptional people skills around the world.</p>
            <img class="img-fluid" src="images/sign.png" alt="">
            <ul class="list-unstyled list-icon mt-4">
              <li class="mb-3"><i class="las la-check"></i> Home medicine review</li>
              <li class="mb-3"><i class="las la-check"></i> Highest Quality Results</li>
              <li><i class="las la-check"></i> We Ensure Safe Diagnosis</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--about end-->


<!--service start-->

<section class="position-relative light-bg">
  <div class="container z-index-1">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7 col-12">
        <div class="section-title mb-3">
          <h2 class="title mb-0">We Provide All Aspects Of Medical Practice For Your Whole Family!</h2> 
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="owl-carousel" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30">
          <div class="item">
            <div class="service-item style-1">
              <div class="service-img mx-4 z-index-1 overflow-hidden">
                <img class="img-fluid" src="images/services/01.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-biology-1"></i>
                </div>
              </div>
              <div class="service-desc white-bg mt-n5 pt-7">
                <div class="service-title">
                  <h4>Biochemistry Solution</h4>
                </div>
                <p>We have put protocols to protect our patients and staff care.</p> <a class="link-btn" href="biochemistry-solution.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-1 active">
              <div class="service-img mx-4 z-index-1 overflow-hidden">
                <img class="img-fluid" src="images/services/02.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-research"></i>
                </div>
              </div>
              <div class="service-desc white-bg mt-n5 pt-7">
                <div class="service-title">
                  <h4>Pharmaceutical Research</h4>
                </div>
                <p>We have put protocols to protect our patients and staff care.</p> <a class="link-btn" href="pharmaceutical-research.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-1">
              <div class="service-img mx-4 z-index-1 overflow-hidden">
                <img class="img-fluid" src="images/services/03.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-test"></i>
                </div>
              </div>
              <div class="service-desc white-bg mt-n5 pt-7">
                <div class="service-title">
                  <h4>Pathologycam Testing</h4>
                </div>
                <p>We have put protocols to protect our patients and staff care.</p> <a class="link-btn" href="pathologycam-testing.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item style-1">
              <div class="service-img mx-4 z-index-1 overflow-hidden">
                <img class="img-fluid" src="images/services/04.jpg" alt="">
                <div class="service-icon"> <i class="flaticon-research"></i>
                </div>
              </div>
              <div class="service-desc white-bg mt-n5 pt-7">
                <div class="service-title">
                  <h4>Chemical Research</h4>
                </div>
                <p>We have put protocols to protect our patients and staff care.</p> <a class="link-btn" href="chemical-research.html"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shape-1 overflow-hidden bottom">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L21.8,112C43.6,128,87,160,131,154.7C174.5,149,218,107,262,90.7C305.5,75,349,85,393,122.7C436.4,160,480,224,524,234.7C567.3,245,611,203,655,165.3C698.2,128,742,96,785,85.3C829.1,75,873,85,916,117.3C960,149,1004,203,1047,229.3C1090.9,256,1135,256,1178,234.7C1221.8,213,1265,171,1309,154.7C1352.7,139,1396,149,1418,154.7L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
    </svg>
  </div>
</section>

<!--service end-->


<!--counter start-->

<section class="p-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="white-bg p-5 z-index-1">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="counter d-flex">
                <div class="counter-icon me-3"> <i class="flaticon-medical-laboratory-1"></i>
                </div>
                <div class="counter-desc"> <span class="count-number text-black" data-to="24" data-speed="2000">24</span>
                  <h6>Our Equipments</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-5 mt-sm-0">
              <div class="counter d-flex">
                <div class="counter-icon me-3"> <i class="flaticon-heathcare-and-medical"></i>
                </div>
                <div class="counter-desc"> <span class="count-number text-black" data-to="272" data-speed="2000">272</span>
                  <h6>Field Expertise</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
              <div class="counter d-flex">
                <div class="counter-icon me-3"> <i class="flaticon-pharmacy"></i>
                </div>
                <div class="counter-desc"> <span class="count-number text-black" data-to="423" data-speed="2000">423</span>
                  <h6>Complete Cases</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-5 mt-lg-0">
              <div class="counter d-flex">
                <div class="counter-icon me-3"> <i class="flaticon-award"></i>
                </div>
                <div class="counter-desc"> <span class="count-number text-black" data-to="576" data-speed="2000">576</span>
                  <h6>Awards Winning</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--counter end-->


<!--multi-sec start-->

<section class="p-0 mt-n6">
  <div class="container-fluid ps-0">
    <div class="row">
      <div class="col-lg-7 col-md-10 col-11">
        <div class="dark-bg p-lg-7 p-4 pb-10 custom-pt-1" data-bg-img="images/pattern/02.png">
          <div class="section-title ms-md-5">
            <h2 class="title">We’re Setting the New Standards in Laboratory & Research Professional.</h2> 
            <p class="lead text-light">We Provide All Aspects Of Medical Practice For Your Whole Family!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 pe-md-0">
        <div class="light-bg p-5 z-index-1 mt-n7">
          <div class="ht-progress-bar mb-4">
            <h4>Environmental Testing</h4>
            <div class="progress" data-value="85">
              <div class="progress-bar">
                <div class="progress-parcent"><span>85</span>%</div>
              </div>
            </div>
          </div>
          <div class="ht-progress-bar mb-4">
            <h4>Immune system</h4>
            <div class="progress" data-value="75">
              <div class="progress-bar">
                <div class="progress-parcent"><span>75</span>%</div>
              </div>
            </div>
          </div>
          <div class="ht-progress-bar mb-4">
            <h4>Advanced Microscopy</h4>
            <div class="progress" data-value="95">
              <div class="progress-bar">
                <div class="progress-parcent"><span>95</span>%</div>
              </div>
            </div>
          </div>
          <div class="ht-progress-bar">
            <h4>Management</h4>
            <div class="progress" data-value="80">
              <div class="progress-bar">
                <div class="progress-parcent"><span>80</span>%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-10 col-12 ms-auto ps-0">
        <div class="position-relative overflow-hidden img-border mt-n15 custom-mt-0">
          <img class="img-fluid w-100" src="images/about/02.jpg" alt="">
          <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube mr-3" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><i class="las la-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--multi-sec end-->


<!--client start-->

<section class="pb-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="owl-carousel no-pb" data-dots="false" data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="20" data-autoplay="true">
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid" src="images/client/09.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid" src="images/client/10.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid" src="images/client/11.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid" src="images/client/12.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid" src="images/client/13.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid" src="images/client/14.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid" src="images/client/15.png" alt="">
            </div>
          </div>
          <div class="item">
            <div class="client-logo">
              <img class="img-fluid" src="images/client/16.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--client end-->


<!--project start-->

<section class="pb-0">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <div class="section-title">
          <h2 class="title">We've Done A Lot's, Let's Check Some<br>Our Latest Research</h2> 
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="owl-carousel no-pb popup-gallery" data-dots="false" data-items="5" data-md-items="3" data-sm-items="2" data-xs-items="1" data-margin="10">
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/project/01.jpg" alt="">
              <a class="popup-img" href="images/project/large/01.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Pathology</span>
                <h4><a href="research-single.html">Personnel Competence</a></h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/project/02.jpg" alt="">
              <a class="popup-img" href="images/project/large/02.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Pathology</span>
                <h4><a href="research-single.html">Personnel Competence</a></h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/project/03.jpg" alt="">
              <a class="popup-img" href="images/project/large/03.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Pathology</span>
                <h4><a href="research-single.html">Personnel Competence</a></h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/project/04.jpg" alt="">
              <a class="popup-img" href="images/project/large/04.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Pathology</span>
                <h4><a href="research-single.html">Personnel Competence</a></h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="cases-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="images/project/05.jpg" alt="">
              <a class="popup-img" href="images/project/large/05.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="cases-title"> <span>Pathology</span>
                <h4><a href="research-single.html">Personnel Competence</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--project end-->


<!--call us start-->

<section class="theme-bg py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-12">
        <h3 class="text-light">Need a Help for Check-up? Call for an Emergency Laboratory Services</h3>
      </div>
      <div class="col-md-5 col-12 ms-auto mt-3 mt-lg-0">
        <div class="d-flex align-items-start justify-content-end">
          <div class="text-white text-end"> <span>Help Desk 24/7</span>
            <h3 class="font-w-4"><a class="text-decoration-underline text-white" href="tel:+(01)24665813917">(01)-246-6581-3917</a></h3>
          </div> <span class="white-bg d-inline-block p-2 ms-4"><i class="las la-phone ic-3x text-theme"></i></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!--call us end-->


<!--team start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="accordion" id="accordion">
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Can we take a second opinion ?
      </button>
    </h2>
            <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
              <div class="accordion-body">Discovered Many desktop publishing packages and web page editors now use Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Is the treatment at Hospital is affordable ?
      </button>
    </h2>
            <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
              <div class="accordion-body">Discovered Many desktop publishing packages and web page editors now use Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</div>
            </div>
          </div>
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        which is the same as saying through ?
      </button>
    </h2>
            <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
              <div class="accordion-body">Discovered Many desktop publishing packages and web page editors now use Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        When our power of choice Labortech ?
      </button>
    </h2>
            <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
              <div class="accordion-body">Discovered Many desktop publishing packages and web page editors now use Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto mt-5 mt-lg-0">
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/01.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Dr.Shiran Reni</a></h5>
                <span>Pathology Special</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5 mt-sm-0">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/02.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Dr.Kamal Leno</a></h5>
                <span>Chemist Expert</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/03.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Dr.Melena Jos</a></h5>
                <span>Lab Head</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/04.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Dr.Leena Ivy</a></h5>
                <span>Research Expert</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--team end-->


<!--blog start-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-12">
        <div class="section-title">
          <h2 class="title">From our blog list Latest News</h2>
          <p class="lead">Our doctors include highly qualified male and female practitioners who come from a range of backgrounds and bring a diversity of skills.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent">
          <img class="card-img-top" src="images/blog/01.jpg" alt="Image">
          <div class="card-body px-4 pb-4 pt-0">
            <div class="mt-n3">
              <div class="d-inline-block white-bg px-2 py-1 text-black box-shadow">20 February</div>
            </div>
            <h2 class="h4 my-3">Equipping Researchers in the Developing World
              </h2>
            <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="las la-eye me-1"></i> 275</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-comments me-1"></i> 300</a>
              </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <div><a class="px-3 py-2 light-bg text-black" href="#">Equipment</a>  <a class="px-3 py-2 light-bg text-black" href="#">Sass</a>
              </div> <a class="link-btn" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent">
          <img class="card-img-top" src="images/blog/02.jpg" alt="Image">
          <div class="card-body px-4 pb-4 pt-0">
            <div class="mt-n3">
              <div class="d-inline-block white-bg px-2 py-1 text-black box-shadow">20 February</div>
            </div>
            <h2 class="h4 my-3">Patient experience better Health Your Doctor Wishes
              </h2>
            <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="las la-eye me-1"></i> 275</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-comments me-1"></i> 300</a>
              </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <div><a class="px-3 py-2 light-bg text-black" href="#">Equipment</a>  <a class="px-3 py-2 light-bg text-black" href="#">Sass</a>
              </div> <a class="link-btn" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <!-- Blog Card -->
        <div class="card post-card border-0 rounded-0 shadow-sm bg-transparent">
          <img class="card-img-top" src="images/blog/03.jpg" alt="Image">
          <div class="card-body px-4 pb-4 pt-0">
            <div class="mt-n3">
              <div class="d-inline-block white-bg px-2 py-1 text-black box-shadow">20 February</div>
            </div>
            <h2 class="h4 my-3">Standards of treatment Improved Detection of Disease
              </h2>
            <ul class="list-inline mb-0 border-top border-bottom border-light py-2 mb-4">
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="las la-eye me-1"></i> 275</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-black"><i class="lar la-comments me-1"></i> 300</a>
              </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <div><a class="px-3 py-2 light-bg text-black" href="#">Equipment</a>  <a class="px-3 py-2 light-bg text-black" href="#">Sass</a>
              </div> <a class="link-btn" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <!-- End Blog Card -->
      </div>
    </div>
  </div>
</section>

<!--blog end-->

</div>

<!--body content end--> 


<!--footer start-->

<footer class="footer light-bg">
  <div class="primary-footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-12 white-bg p-4 p-md-6">
          <a class="footer-logo" href="index.php">
            <img id="footer-logo" class="img-fluid" src="images/logo.png" alt="">
          </a>
          <p class="my-4">Labortech will be administered through customizable programs incorporate partnership between family illness or disease management. Labortech Made With Latest Technology Bootstrap 5.</p>
          <div class="social-icons social-colored footer-social">
            <ul class="list-inline">
              <li><a href="#"><i class="lab la-facebook-f"></i></a>
              </li>
              <li><a href="#"><i class="lab la-twitter"></i></a>
              </li>
              <li><a href="#"><i class="lab la-instagram"></i></a>
              </li>
              <li><a href="#"><i class="lab la-dribbble"></i></a>
              </li>
              <li><a href="#"><i class="lab la-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8 col-12 p-4 p-md-6">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <h4 class="mb-4">Quick Links</h4>
              <div class="footer-list">
                <ul class="list-unstyled">
                  <li><a href="about-us.html">About Us</a>
                  </li>
                  <li><a href="contact.php">Contact Us</a>
                  </li>
                  <li> <a href="privacy-policy.html">Privacy Policy</a>
                  </li>
                  <li> <a href="terms-and-conditions.html">Terms & Condition</a>
                  </li>
                  <li><a href="team.html">Our Team</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 mt-6 mt-sm-0">
              <h4 class="mb-4">Services</h4>
              <div class="footer-list">
                <ul class="list-unstyled">
                  <li><a href="pathologycam-testing.html">Pathologycam Testing</a>
                  </li>
                  <li><a href="biochemistry-solution.html">Biochemistry Solution</a>
                  </li>
                  <li><a href="chemical-research.html">Chemical Research</a>
                  </li>
                  <li><a href="pharmaceutical-research.html">Pharmaceutical Research</a>
                  </li>
                  <li><a href="diabetes-testing.html">Diabetes Testing</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-5 col-12 mt-6 mt-md-0">
              <h4 class="mb-4">Get In Touch</h4>
              <div class="footer-cntct my-4">
                <ul class="media-icon list-unstyled">
                  <li> <i class="flaticon-hospital"></i>
                    <p class="mb-0">423B, Road Wordwide Country, USA</p>
                  </li>
                  <li><i class="flaticon-medical-report"></i>  <a href="mailto:themeht23@gmail.com">themeht23@gmail.com</a>
                  </li>
                  <li><i class="flaticon-medical-assistance"></i>  <a href="tel:+912345678900">+91-234-567-8900</a>
                  </li>
                  <li><i class="flaticon-working-hours"></i> 
                    <p class="mb-0">Mon-Sat:9.30am To 7.00pm</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="copyright p-4 white-bg mt-5 ms-md-n6">Copyright © 2021 All rights reserved | Labortech Made by <i class="lar la-heart text-theme heartBeat2"></i>  <u><a href="www.themeht.html">ThemeHt</a></u>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!-- Cart Modal -->
<div class="modal fade cart-modal" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Your Cart (2)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <div class="row align-items-center">
            <div class="col-5 d-flex align-items-center">
              <div class="me-4">
                <button type="submit" class="btn btn-theme btn-sm"><i class="las la-times"></i>
                </button>
              </div>
              <!-- Image -->
              <a href="product-left-image.html">
                <img class="img-fluid" src="images/product/01.jpg" alt="...">
              </a>
            </div>
            <div class="col-7">
              <!-- Title -->
              <h6><a class="link-title" href="product-single.html">Dealistic Microscope</a></h6>
              <div class="product-meta"><span class="me-2 text-theme">$120.00</span><span class="text-muted">x 1</span>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5">
        <div>
          <div class="row align-items-center">
            <div class="col-5 d-flex align-items-center">
              <div class="me-4">
                <button type="submit" class="btn btn-theme btn-sm"><i class="las la-times"></i>
                </button>
              </div>
              <!-- Image -->
              <a href="product-single.html">
                <img class="img-fluid" src="images/product/02.jpg" alt="...">
              </a>
            </div>
            <div class="col-7">
              <!-- Title -->
              <h6><a class="link-title" href="product-left-image.html">Biotechnology Microscope</a></h6>
              <div class="product-meta"><span class="me-2 text-theme">$160.00</span><span class="text-muted">x 1</span>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-5">
        <div class="d-flex justify-content-between align-items-center mb-8"> <span class="text-muted">Subtotal:</span>  <span class="text-dark">$280.00</span> 
        </div> <a href="product-cart.html" class="btn btn-theme me-2">View Cart</a>
        <a href="product-checkout.html" class="btn btn-dark">Continue To Checkout</a>
      </div>
    </div>
  </div>
</div>

<!--color-customizer start-->

<div class="color-customizer closed">
  <div class="color-button">
    <a class="opener" href="#"> <i class="las la-spinner fa-spin"></i>
    </a>
  </div>
  <div class="clearfix color-chooser text-center">
    <ul class="colorChange clearfix">
      <li class="theme-default selected" title="theme-default" data-style="color-1"></li>
      <li class="theme-2" title="theme-2" data-style="color-2"></li>
      <li class="theme-3" title="theme-3" data-style="color-3"></li>
      <li class="theme-4" title="theme-4" data-style="color-4"></li>
    </ul>
  </div>
</div>

<!--color-customizer end-->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-location-arrow"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== jquery -->
<script src="js/theme.js"></script>

<!--== theme-plugin -->
<script src="js/theme-plugin.js"></script>

<!--== color-customize -->
<script src="js/color-customize/color-customizer.js"></script> 

<!--== theme-script -->
<script src="js/theme-script.js"></script>

<!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/template/labortech/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 06:28:48 GMT -->
</html>
