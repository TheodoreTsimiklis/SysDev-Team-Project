<link rel="stylesheet" href="public/css/Header.css">

<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        
        <div class="navigation-top">
        


        <?php
    if (isLoggedIn()) {
        echo'<a href="/System-Dev/Home" class="nav-links" style="float:left; font-weight: bold;">Home</a>
        <a href="/System-Dev/AboutUs" class="nav-links" style="float:left">About Us</a>
        <a href="/System-Dev/Contact" class="nav-links" style="float:left">Contact Us</a>
        <a href="/System-Dev/Contact" class="nav-links" style="float:left">More</a>
        <a class="nav-links" href="/System-Dev/People/logout"><i class="fa-solid fa-sign-out"></i> Logout</a>';
    } 
    else if (adminLogin()){
        echo'<a href="/System-Dev/Booking" class="nav-links" style="float:left;">Booking</a>
        <a href="/System-Dev/Reply" class="nav-links" style="float:left">Reply</a>
        <a href="/System-Dev/Client" class="nav-links" style="float:left">Client</a>
        <a href="/System-Dev/Service" class="nav-links" style="float:left">Service</a>
        <a class="nav-links" href="/System-Dev/People/logout"><i class="fa-solid fa-sign-out"></i> Logout '.$_SESSION['user_username'].'</a>';

    }else{
      echo '
      <a href="/System-Dev/Home" class="nav-links" style="float:left; font-weight: bold;">Home</a>
      <a href="/System-Dev/AboutUs" class="nav-links" style="float:left">About Us</a>
      <a href="/System-Dev/Contact" class="nav-links" style="float:left">Contact Us</a>
      <a class="nav-links" href="/System-Dev/People/SignIn" style="float:right; font-weight: bold;"> Sign In</a>
            <a class="nav-links" href="/System-Dev/People/SignUp" style="float:right; font-weight: bold;"> Sign Up</a>';
    }
    ?>

    

    </div>







      </div>
    </div>
  </header>