<footer class="footer-basic mt-auto" style="background: #F9EFBC; height: auto; text-align: center; ">
    <div class="social" style="padding-bottom: 10px; padding-top: 20px; height: 60px">
        <a href="https://www.instagram.com/"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="https://www.snapchat.com/"><i class="fa fa-snapchat fa-2x"></i></a>
        <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a>


    </div>
    <ul class="list-inline">
        <?php


        if (isLoggedIn()) {
            echo '
            <li class="list-inline-item"><a href="/System-Dev/Home">Home</a></li>
            <li class="list-inline-item"><a href="/System-Dev/AboutUs">About Us</a></li>
            <li class="list-inline-item"><a href="/System-Dev/Contact">Contact Us</a></li>
                ';
        } else if (adminLogin()) {
            echo '
            <li class="list-inline-item"><a href="/System-Dev/Reply">Question</a></li>
                
            <li class="list-inline-item"><a href="/System-Dev/Service/getServices" >Service</a></li>
                ';
        } else {
            echo '
            <li class="list-inline-item"><a href="/System-Dev/Home" >Home</a></li>
            <li class="list-inline-item"><a href="/System-Dev/AboutUs" >About Us</a></li>
            <li class="list-inline-item"><a href="/System-Dev/People/SignIn" >Contact Us</a></li>
           ';
        }
        ?>
      

    </ul>
    <p class="copyright" style="color: #474747; padding-bottom: 30px;">514-Painting © 2022</p>
</footer>

<script src="<?php echo URLROOT; ?>/bootstrap/js/bootstrap.js"></script>

</body>

</html>