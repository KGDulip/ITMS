<?php 
//call config file for DB connection details
require_once 'apps/Control/config.php';
// create a object for template class
$template = new template(); 
?>

<!DOCTYPE html>
<html lang="en">

    <?php $template->getHead(); ?>


<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>ITMS</b>.MDTD</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

    <?php $template->showMessage(); ?>
      
      <form action="apps/Module/UserMgt/_Login.php" method="post"> <!-- when click on Submit Button ... Load _login.php... the method is Post -->
        <div class="input-group mb-3">
          <input type="email" name="User_Reg_Email" id="User_Reg_Email" class="form-control" placeholder="Email" required="">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" name="User_Reg_Password" id="User_Reg_Password" class="form-control" placeholder="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" value = "Sign In" class="btn btn-primary btn-block"/>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="index.php" class="text-center">Register a new membership</a>
        
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>


</html>
