<?php include APPROOT . '/views/includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation</title>

    <style>
        img {
            width: 350px;

        }


        .confirm {
            height: 100%;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("<?php echo URLROOT; ?>/public/images/1.jpg") no-repeat center;
            background-size: cover;
        }

        .confirm-card {
            width: 35%;
            background-color: #fff;
            margin: 10rem auto;
            margin-bottom: 15rem;
            border-radius: 10px;
            padding-top: 4rem;
            padding-bottom: 4rem;
            text-align: center;

        }
    </style>
</head>

<body>

    <section class="confirm">

        <div class="container-fluid">

            <div class="confirm-card">
                <p class="send">
                    <img src="<?php echo URLROOT; ?>/public/images/send.gif">
                </p>
                <h1>Your question is confirmed</h1>

            </div>
        </div>
    </section>







</body>

</html>




<?php include APPROOT . '/views/includes/footer.php'; ?>