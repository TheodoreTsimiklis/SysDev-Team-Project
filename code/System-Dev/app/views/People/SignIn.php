<?php require APPROOT . '/views/includes/header.php'; ?>

<link rel="stylesheet" href="public/css/Header.css">
<form class="px-4 py-3" method="post" action="">




 
    <a href="/System-Dev/People/SignIn">Client</a>
    <a href="/System-Dev/People">Admin</a>




    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="Email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="Password" placeholder="Password">
    </div>
    <div class='mt-2'> 
        <button type="submit" name="login" class="btn btn-primary">Sign in</button>
        <p class="text-center">Not registered yet? <a href="/System-Dev/People/SignUp">Sign Up</a> </p>
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