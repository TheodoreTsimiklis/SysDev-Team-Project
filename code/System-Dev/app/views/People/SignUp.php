<?php require APPROOT . '/views/includes/header.php'; ?>


<div class="login" style=" height: 100%;
                            width: 100%;
                            background: url('<?php echo URLROOT; ?>/public/images/loginbg.png') no-repeat;
                            background-size: cover;">
  <div class="form">
    <form class="input-form" method="post" action="">
    <h2 class="h2">SIGN UP</h2>


      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control  <?php echo (!empty($data['password_len_error'])) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password">
      </div>

      <div class="form-group">
        <label for="verify_password">Re-enter the password</label>
        <input type="password" class="form-control  <?php echo (!empty($data['password_match_error'])) ? 'is-invalid' : ''; ?>" id="verify_password" name="verify_password" placeholder="Re-enter the password">
      </div>

      <button type="submit" name="signup" class="btn btn-primary mt-2"> Sign up</button>
      <p class="text-center">Already registered? <a href="SignIn">Login</a> </p>

      <?php

      if (!empty($data['msg'])) {
        echo '<div class="alert alert-danger" role="alert">' .
          $data['msg'] . '
    </div>';
      }

      ?>

    </form>
  </div>
</div>

<?php include APPROOT . '/views/includes/footer.php'; ?>