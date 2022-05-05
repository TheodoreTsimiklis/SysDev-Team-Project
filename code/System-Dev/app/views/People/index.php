<?php include APPROOT . '/views/includes/header.php'; ?>



<div class="login">
    <div class="form">

        <form class="px-4 py-3" method="post" action="">
            <h3 class="h3">LOGIN</h3>

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

