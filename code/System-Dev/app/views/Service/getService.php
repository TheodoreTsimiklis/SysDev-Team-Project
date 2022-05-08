<?php include APPROOT . '/views/includes/header.php'; ?>

<div class="" style="min-height: 100vh;background: url('<?php echo URLROOT; ?>/images/886.png'); no-repeat center;">
    <h1 style="margin-bottom: 15px;padding-top: 30px;text-align: center;">All Service</h1>
    <br>

    <h3 style="margin-bottom: 25px;text-align: center;"><a class="nav-link" href="/System-Dev/Service/createService">Create Services</a> </h3>


    <div class="table-responsive" style="transform: scale(1);transform-origin: top;opacity: 0.88;filter: contrast(92%); margin: auto 15rem;">
        <table class="table table-bordered">
            <tr>
                <td style="border-bottom-color: #000000; color: #494949;" class="text-center">ID</td>
                <td style="border-bottom-color: #000000; color: #494949;" class="text-center">Image</td>
                <td style="border-bottom-color: #000000; color: #494949;" class="text-center">Name</td>
                <td style="border-bottom-color: #000000; color: #494949;" class="text-center">Description</td>
                <td style="border-bottom-color: #000000; color: #494949;" colspan="3" class="text-center"> Actions</td>
            </tr>
            <?php
            foreach ($data["services"] as $service) {
                echo "<tr>";
                echo "<td style='color: #101010;'>$service->service_id</td>";

                echo '<td>
                        <div class="d-flex align-items-center"><img src="' . URLROOT . '/public/images/' . $service->service_image . 
                        '" style="width:100%; height:auto;"
                         </div>
                         </td>';

                echo "<td style='color: #101010;'>$service->service_name</td>";



                echo "<td style='color: #101010;'>$service->service_description</td>";
                echo "<td>
                <a href='/System-Dev/Service/delete/$service->service_id'> Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

<?php include APPROOT . '/views/includes/footer.php'; ?>