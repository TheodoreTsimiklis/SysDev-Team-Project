<!DOCTYPE html>
<html lang="en">

<head>
  <title>514-Painting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />

  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/login.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom Theme files -->
  <link href="<?php echo URLROOT; ?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
  <link href="<?php echo URLROOT; ?>/css/style.css" type="text/css" rel="stylesheet" media="all">
  <!-- icon of opening menu -->
  <link href="<?php echo URLROOT; ?>/css/font-awesome.css" rel="stylesheet">
  <!-- font-awesome icons -->
  <!-- //Custom Theme files -->
  <!-- web-fonts: text font for header -->
  <link href='http://fonts.googleapis.com/css?family=Redressed' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- //web-fonts -->

  <!-- Andrei's header -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/cssA/Header.css">

</head>

<body>
  <div id="nav-overlay" class="nav-w3right">
    <span class="menu-trigger trigger fa fa-plus" rel="nav-overlay"></span>
    <div>
      <nav class="w3ls-nav">
        <ul>
          <?php
          if (isLoggedIn()) {
            echo ' <li><a href="/System-Dev/Home/index">Home</a></li>
          <li><a href="/System-Dev/AboutUs" >About Us</a></li>
          <li><a href="/System-Dev/Contact">Contact Us</a></li>
       
          <li><a href="/System-Dev/People/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
          ';
          } else if (adminLogin()) {
            echo '<li><a href="/System-Dev/Reply" class="nav-links" ">Question</a></li>
          <li><a href="/System-Dev/Client" class="nav-links" >Client</a></li>
          <li><a href="/System-Dev/Service/getServices" class="nav-links" >Service</a></li>
          <li><a class="nav-links" href="/System-Dev/People/logout"><i class="fa fa-sign-out"></i> Logout ' . $_SESSION['user_username'] . '</a></li>';
          } else {
            echo '<li><a href="/System-Dev/Home/index">Home</a></li>
          <li><a href="/System-Dev/AboutUs" >About Us</a></li>
          <li><a href="/System-Dev/People/SignIn">Contact Us</a></li>
          <li><a href="/System-Dev/People/SignIn" > Sign In</a></li>
          <li><a class="nav-links" href="/System-Dev/People/SignUp" > Sign Up</a></li>';
          }
          ?>

        </ul>
      </nav>
    </div>
  </div>
  <!-- banner -->
  <div class="banner about-w3bnr">
    <div class="banner-layer">
      <!-- header -->
      <div class="header-agileits">
        <div class="w3ls-logo">
          <h1><a href="<?php echo URLROOT; ?>/Home/index"><span>514</span>Painting</a></h1>
        </div>
        <div class="clearfix"> </div>
      </div>
      <!-- //header -->
      <!-- menu js-->
      <script src="<?php echo URLROOT; ?>/js/jquery-3.1.1.slim.min.js"></script>
      <script>
        $(document).ready(function() {
          $('.trigger').click(function() {
            var $this = $(this),
              notThis = $this.hasClass('open'),
              thisNav = $this.attr("rel");
         
            //open the nav
            $this.toggleClass('open');
            $("#" + thisNav).toggleClass('open');
            if ($(this).hasClass("block-scroll")) {
              $('html').toggleClass('disable-scroll');
              $('#overlay-mobile').toggleClass('visible');
            }
          });
        });
      </script>
      <!-- //menu js-->
      <!-- banner-text -->
      <div class="banner-text-info">
        <div class="banner-w3lstext">
          <h2>514 Painting</h2>
        </div>
      </div>
      <!-- //banner-text -->
    </div>

    <!-- --------------------insert Andrei's header------------------------------------------------------------------------- -->
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>


        <div class="navigation-top">


          <?php


          if (isLoggedIn()) {
            echo '
          <a href="/System-Dev/Home" class="nav-links" style="float:left; font-weight: bold;">Home</a>
          <a href="/System-Dev/AboutUs" class="nav-links" style="float:left">About Us</a>
          <a href="/System-Dev/Contact" class="nav-links" style="float:left">Contact Us</a>
        <a class="nav-links" href="/System-Dev/People/logout"><i class="fa fa-sign-out"></i> Logout</a>';
          } else if (adminLogin()) {
            echo '
        <a href="/System-Dev/Reply" class="nav-links" style="float:left">Question</a>
        <a href="/System-Dev/Client" class="nav-links" style="float:left">Client</a>
        <a href="/System-Dev/Service/getServices" class="nav-links" style="float:left">Service</a>
        <a class="nav-links" href="/System-Dev/People/logout"><i class="fa fa-sign-out"></i> Logout ' . $_SESSION['user_username'] . '</a>';
          } else {
            echo '
      <a href="/System-Dev/Home" class="nav-links" style="float:left; font-weight: bold;">Home</a>
      <a href="/System-Dev/AboutUs" class="nav-links" style="float:left">About Us</a>
      <a href="/System-Dev/People/SignIn" class="nav-links" style="float:left">Contact Us</a>
      <a class="nav-links" href="/System-Dev/People/SignIn" style="float:right; font-weight: bold;"> Sign In</a>
      <a class="nav-links" href="/System-Dev/People/SignUp" style="float:right; font-weight: bold;"> Sign Up</a>';
          }
          ?>

        </div>


      </div>
    </div>


  </div>
  <!-- //banner -->


  <script src="<?php echo URLROOT; ?>/js/bootstrap.js"></script>
</body>

</html>


<!-- <header class="p-3 bg-dark text-white"> -->

</header>