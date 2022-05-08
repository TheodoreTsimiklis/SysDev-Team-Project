<?php include APPROOT . '/views/includes/header.php'; ?>

<div id="contact" class="contact cd-section">
    <div class="container">
        <div class="agileits-title">
            <h3>Contact Us</h3>
        </div>
        <div class="contact-row agileits-w3layouts">
            <div class="col-md-6 col-sm-6 contact-w3lsleft">
                <div class="contact-grid agileits">

                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="fName" required>
                            <label>First Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="lName" required>
                            <label>Last Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="phone" required pattern="^\d{10}$|^(\(\d{3}\)\s*)?\d{3}[\s-]?\d{4}$">
                            <label>Phone(nnn)nnn-nnnn</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <textarea name="question" required></textarea>
                            <label>Question</label>
                            <span></span>
                        </div>
                        <input type="submit" name="submit"></input>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-w3lsright">
                <h6><span>514 Painting </span>Have questions? Contact us now! </h6>
                <div class="address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Visit Us</h5>
                        <p>821 Sainte Croix Ave, Saint-Laurent, Quebec H4L 3X9 </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row w3-agileits">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Mail Us</h5>
                        <p><a href="mailto:514painting@gmail.com"> 514painting@gmail.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Call Us</h5>
                        <p>+01 514 666 8888</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="mapouter" style="margin:auto; margin-top: 50px;">
            <div class="gmap_canvas"><iframe width="1200" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=821%20Sainte%20Croix%20Ave,%20Saint-Laurent,%20Quebec%20H4L%203X9&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 1200;
                    }
                </style><a href="https://www.embedgooglemap.net">embedding a google map</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 1200px;
                    }
                </style>
            </div>
        </div>

    </div>
</div>
<!-- //contact -->



<?php include APPROOT . '/views/includes/footer.php'; ?>