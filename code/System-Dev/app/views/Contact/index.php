<?php include APPROOT . '/views/includes/header.php'; ?>
This is the Contact Page
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
                            <input type="text" name="fName" required="">
                            <label>First Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="lName" required="">
                            <label>Last Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="phone" required="">
                            <label>Phone</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <textarea name="question" required=""></textarea>
                            <label>Question</label>
                            <span></span>
                        </div>
                        <input type="submit" value="SEND">
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
    </div>
</div>
<!-- //contact -->


<!-- Andrei's version -->
<div class="form-group">
    <label for="fName">Balls</label>
    <input type="text" class="form-control" id="fName" name="fName" placeholder="First Name">
</div>
<div class="form-group">
    <label for="lName">Last Name</label>
    <input type="text" class="form-control" id="lName" name="lName" placeholder="Last Name">
</div>
<div class="form-group">
    <label for="pNumber">Phone Number</label>
    <input type="text" class="form-control" id="pNumber" name="pNumber" placeholder="(###)###-####">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
</div>
<label for="question">Question</label>
<textarea id="question" name="question" placeholder="Example text..." style="height:200px"></textarea>
<input type="submit" name="submit"></input>


<?php include APPROOT . '/views/includes/footer.php'; ?>