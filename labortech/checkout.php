<?php
	require 'conn.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',product_qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />

<!-- Title -->
<title>Labortech - Laboratory & Science Research HTML5 Template</title>

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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <style>
    /* Custom styling for blue background */
    .blue-bg {
      background:#2363d578;
      
    }
  </style>
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
                        <li><a href="shortcode-about.html">About</a>
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
              </div> <a class="btn btn-theme btn-sm d-none d-md-inline-block" href="#"><span>Appointment</span></a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<!--header end-->

  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="blue-bg p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5  ><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>$</h5>
        </div> 
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
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

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
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
