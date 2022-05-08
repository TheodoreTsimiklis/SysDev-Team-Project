<?php include APPROOT . '/views/includes/header.php'; ?>

<div class="" style="min-height: 100vh;background: url('<?php echo URLROOT; ?>/images/aboutus.jpg'); no-repeat center; background-size: cover;">
    <h1 style="margin-bottom: 15px;padding-top: 30px;text-align: center;">Our Service</h1>
 

    <div class="table-responsive" style=" margin: auto 15rem;">
        <table class="table">
            <?php
            foreach ($data["services"] as $service) {
                echo "<tr>";
              
                echo '<td>
                        <img src="' . URLROOT . '/public/images/' . $service->service_image . '" style="width: 400px; height:auto;"
                        
                    </td>';

                echo "<td style='color: #101010; vertical-align: middle;'> <h2>$service->service_name </h2> <h3 style='color: #101010;'>$service->service_description </h3></td>";

                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

<?php include APPROOT . '/views/includes/footer.php'; ?>