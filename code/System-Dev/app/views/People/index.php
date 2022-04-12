<?php include APPROOT.'/views/includes/header.php'; ?>

<link rel="stylesheet" href="public/css/Header.css">
<form class="px-4 py-3" method="post" action="">




 
    <a href="/System-Dev/People/SignIn">Client</a>
    <a href="/System-Dev/People">Admin</a>




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

    if($data != []){
        echo '<div class="alert alert-danger" role="alert">'.
            $data['msg'].'
        </div>';
    }

?>





</form>

<?php require APPROOT.'/views/includes/footer.php'; ?>