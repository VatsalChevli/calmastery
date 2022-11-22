<?php $activePage = basename($_SERVER['PHP_SELF'], ".php") ?>
<!DOCTYPE html>
 
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
  <title>index</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 	
  
  <!-- CSS
  ================================================== -->
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Poppins&display=swap" rel="stylesheet"> -->

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
  .preloader span{
    background: #7B3AAE !important;
  }

  nav.navbar.navbar-expand-lg.navbar-light {
    padding: 1% 6%;
}
    .navigation .logo-default{
      display: block;
    }
    img.logo-default {
    width: 115px;
}
    .navigation .dropdown-menu{
      width: 900px;
      display: flex;
      left: 0 !important;
      top: 99%;
      right: 0 !important;
      padding: 0;
      background: white;
    }
    .product_nav_left{
      padding: 5%;
      background: #8d44c591;
      text-align: center;
      height: 100%;
    }
    .product_nav_right{
      height: 100%;
      padding: 5%;
      color: black;
    }
    .product_nav_right .dropdown-item{
      color: black;
    }
    .product_nav_right .dropdown-item:hover{
      color: #4e4e4e;
      background: #8d44c591;
    }

    li.nav-item.dropdown.active{
      background: none;
    }
    .navigation .navbar-light .navbar-nav .nav-item.active .nav-link{
      color: black;
    }
    .navbar-collapse{
      width: 100%;
    }
    @media screen and (max-width:  1199px){
      /* img.logo-default {
        width: 170px;
      } */
    }
    @media screen and (max-width: 991px){
      .navigation .dropdown-menu {
          display: none;
      }
      .navigation .dropdown-menu.show{
        width: 100%;
      }
      .product_nav_left{
        display: none;
      }
      .navigation .navbar-light .navbar-nav .nav-item .nav-link{
        font-size: 16px;
      }
      .product_nav_right {
          padding: 0% 5%;
          text-align: left;
      }
      .nav-btns{
        display: flex;
        justify-content: center;
      }
      /* .nav-btns a{
        width: 50%;
      } */
      .sign_in_btn{
        width: 100%;
      }
      .sign_up_btn{
        width: 100%;
      }
    }
    @media screen and (max-width: 1024px){
      .navigation .dropdown-menu{
        width: 830px;
      }
      img.logo-default {
          width: 100px;
      }
    }
    @media screen and (max-width:  991px){
      .navigation .navbar-light .navbar-toggler{
        border: transparent;
      }
    }
    @media screen and (min-width: 992px){

      .navbar-expand-lg .navbar-nav {
          align-items: center;
      }
      .navbar-expand-lg .navbar-nav .dropdown-menu{
        box-shadow: 0px 9px 15px rgb(0 0 0 / 50%);
      }
      .navigation .dropdown-menu{
        left: -420px !important;
      }
    }
    @media screen and (max-width:  320px){
      .dropdown-item p{
        font-size: 12px;    
      }
    }
  </style>
</head>

<body id="body">

 <!--
 Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


<!--
Fixed Navigation
==================================== -->
<header class="navigation">
  
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- <div class="container"> -->
      <!-- logo -->
      <a class="navbar-brand logo" href="index.php">
        <img class="logo-default" src="images/calmastery-logo.png" alt="logo">
        <!-- <img class="logo-white" src="images/logo-white.png" alt="logo"/> -->
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="<?= ($activePage == 'index') ? 'active':''; ?> nav-link" href="index.php">Home</a>
          </li>
        <li class="nav-item ">
          <a class="nav-link" href="">Book Session</a>
        </li>
        
        
          <!-- <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Features
            </a>
            <div class="dropdown-menu row align-items-start" aria-labelledby="navbarDropdown">
              <div class="col-lg-6" style="padding: 0;">
                <div class="product_nav_left">
                  <img src="images/hrieons-header.png" width="100%">
                  <h5 style="margin-top: 3%;">Empower your HR Management Today for The Future!</h5>
                  <p>Hrieons helps Modern HR become smart & efficient to become the trustworthy ally of their employees.</p>
                </div>
              </div>
              <div class="col-lg-6" style="padding: 0;">
                <div class="product_nav_right">
                  <a class="dropdown-item" href="feature-ams.php"><h6>Attendance Management System</h6></a>
                  <a class="dropdown-item" href="feature-lms.php"><h6>Leave Management System</h6></a>
                  <a class="dropdown-item" href="feature-hrms.php"><h6>HRMS Software</h6></a>
                  <a class="dropdown-item" href="feature-ess.php"><h6>Employee Self Service Portal</h6></a>
                  <a class="dropdown-item" href="feature-maa.php"><h6>Mobile Attendance Application</h6></a>
                </div>
              </div>
            </div>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" href="blog.php">Blogs</a>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="about-us.php">About us</a>
        </li>
          <li class="nav-item ">
            <a class="nav-link <?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item nav-btns">
            <a class="btn sign_up_btn" href="https://admin.hrieons.com/">
            Book a Session
            </a>
          </li>
        </ul>
      </div>
    <!-- </div> -->
    </nav>
    <!-- /main nav -->
  
</header>
