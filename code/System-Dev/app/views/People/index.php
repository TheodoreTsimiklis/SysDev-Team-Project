<?php include APPROOT . '/views/includes/header.php'; ?>



<div class="login" style=" height: 100%;
                            width: 100%;
                            background: url('<?php echo URLROOT; ?>/public/images/loginbg.png') no-repeat;
                            background-size: cover;">
    <div class="form">

        <form class="input-form" method="post" action="">
            <h2 class="h2">LOGIN</h2>

            <div class="role">

                <a href="/System-Dev/People/SignIn">Client</a>
                <a href="/System-Dev/People">Admin</a>

            </div>


            <div class="form-group">
            <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="Username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="Password" placeholder="Password">
            </div>
            <div class='mt-2'>
                <button type="submit" name="admin" class="btn btn-primary">Sign in</button>
            </div>
            <?php

            if ($data != []) {
                echo '<div class="alert alert-danger" role="alert">' .
                    $data['msg'] . '
        </div>';
            }

            ?>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>

