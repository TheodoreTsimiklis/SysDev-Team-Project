<?php include APPROOT . '/views/includes/header.php'; ?>

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

<table class="table table-bordered">
    <tr>
        <td class="text-center">ID</td>
        <td class="text-center">Image</td>
        <td class="text-center">Name</td>
        <td class="text-center">Description</td>
        <td colspan="3" class="text-center"> Actions</td>
    </tr>
    <?php
    foreach ($data["services"] as $service) {
        echo "<tr>";
        echo "<td>$service->service_id</td>";

        echo '<td>
        <div class="d-flex align-items-center"><img src="' . URLROOT . '/public/images/' . $service->service_image . '" style="width:210px; height:300px;"
       </div>
    </td>';

        echo "<td>$service->service_name</td>";



        echo "<td>$service->service_description</td>";
        echo "<td>
                <a href='/System-Dev/Service/delete/$service->service_id'> Delete</a>
                </td>";
        echo "</tr>";
    }
    ?>