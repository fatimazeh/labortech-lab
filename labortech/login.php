<?php

@include 'conn.php';

session_start();

if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);



   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:index.php');

      }
     
   }else{
    echo "<script>
    alert('incorrect email or password!');
</script>";
   }

};
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/template/labortech/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 06:29:32 GMT -->
<head>
  
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, rtl, Laboratory, medical" />
  <meta name="description" content="Laboratory & Science Research HTML5 Template" />
  <meta name="author" content="www.themeht.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Title -->
  <title>Labortech - Laboratory & Science Research</title>

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


<div class="search-input" id="search-input-box">
  <div class="container ">
    <form class="d-flex justify-content-between search-inner">
      <input type="text" class="form-control" id="search-input" placeholder="Search Here">
      <button type="submit" class="btn"></button> <span class="las la-times" id="close-search" title="Close Search"></span>
    </form>
  </div>
</div>

<!--header end-->


<!--page title start-->

<section class="page-title parallaxie" data-bg-img="images/bg/06.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="white-bg p-md-5 p-3 d-inline-block">
        <h1 class="text-theme">Log<span class="text-black">in</span></h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb border-top border-light pt-3 mt-3">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="las la-home me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">Pages
            </li>
            <li class="breadcrumb-item">Utilities
            </li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
          </ol>
        </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--login start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center dark-bg">
        <div class="p-lg-5 px-3 py-5">     
        <img class="img-fluid" src="images/login-img.png" alt="">     
          <div class="section-title mb-0 mt-5">
            <h2 class="title">Welcome To The Labortech</h2> 
            <p class="mb-0 text-light">Any Question or Remarks ? Just Write Us a Message!</p>
          </div>
          

        </div>
      </div>
      <div class="col-lg-6 white-bg">
        <div class="p-lg-5 px-3 py-5">
          <h3 class="mb-4">Login Your Account</h3> 


          <div class="form-container">
          
          <form action="" method="post">
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input class="form-control" type="email" name="email" required placeholder="enter your email">  <br>
      <input class="form-control" type="password" name="password" required placeholder="enter your password"> <br>
      <input type="submit" name="submit" value="login now" class="btn btn-white btn-sm btn-theme">
   </form>
   </div>


          <div class="d-flex align-items-center mt-4"> <span class="text-black me-1">don't have an account? </span>
            <a href="register.php">register now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--login end-->

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
                  <li><a href="contact.html">Contact Us</a>
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


<!-- Mirrored from themeht.com/template/labortech/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 06:29:35 GMT -->
</html>
