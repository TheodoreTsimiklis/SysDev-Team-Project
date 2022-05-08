<?php include APPROOT . '/views/includes/header.php'; ?>


<div class="" style="min-height: 100vh;background: url('<?php echo URLROOT; ?>/images/886.png'); no-repeat center; background-size: cover;">
    <h1 style="margin-bottom: 15px;padding-top: 30px;text-align: center;">Create Service</h1>
    <br>
    <h3 style="margin-bottom: 25px;text-align: center;"><a class="nav-link" href="/System-Dev/Service/getServices">View Services</a> </h3>


    <form action='' method='post' enctype="multipart/form-data">

        <div class="form-group">
            <label for="nameinput">Service Name</label>
            <input name="serviceName" type="text" class="form-control" id="nameinput" placeholder="Service Name">
        </div>
        <div class="form-group">
            <label for="cityinput">Service Description</label>
            <input name="serviceDescription" type="text" class="form-control" id="cityinput" placeholder="Service Description">
        </div>

        <div class="form-group">
            <label for="profileinput">Service image</label>
            <input type='file' name='picture' class='form-control' />
        </div>
        <div>
            <button type="submit" name='add' class="btn btn-primary" style="display:block; margin:0 auto; margin-bottom:20px;">Add Service</button>
        </div>
    </form>
</div>
<?php include APPROOT . '/views/includes/footer.php'; ?>