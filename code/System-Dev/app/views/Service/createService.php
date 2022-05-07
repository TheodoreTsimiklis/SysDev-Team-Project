<?php include APPROOT.'/views/includes/header.php'; ?>

    <h1>Create Service View</h1>
    <br>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/System-Dev/Service/getServices">View Services</a>
        </li>
        <br>
        <br>
        <li class="nav-item">
            <a class="nav-link" href="System-Dev/Service/createService">Create Services</a>
        </li>
        
        </ul>
    
         </div>
    </nav>

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

    <button type="submit" name='add' class="btn btn-primary">Add Service</button>
    </form>