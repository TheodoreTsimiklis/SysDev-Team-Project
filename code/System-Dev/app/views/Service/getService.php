<?php include APPROOT.'/views/includes/header.php'; ?>

    <h1>Get Services View</h1>
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
            <a class="nav-link" href="/System-Dev/Service/createService">Create Services</a>
        </li>
        
        </ul>
    
         </div>
    </nav>

    <table  class="table table-bordered">
        <tr>
            <td class="text-center">Service</td>
            <td class="text-center">ID</td>
            <td class="text-center">Description</td>
            <td colspan="3" class="text-center"> Actions</td>
        </tr>
        <?php
            foreach($data["service"] as $services){
                echo"<tr>";
                echo '<td>
                <div class="d-flex align-items-center"><img class="rounded-circle" src="'.URLROOT.'/public/image/'.$services->service_image.'" width="30"><span class="ml-2">'.$services->service_name.'</span></div>
            </td>';
                echo"<td>$services->service_id</td>";
                echo"<td>$services->service_description</td>";
                echo"<td>
                <a href='/System-Dev/Service/delete/$services->service_id'> Delete</a>
                </td>";
                echo"</tr>";

            }
        ?>