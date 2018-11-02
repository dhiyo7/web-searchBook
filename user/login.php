<?php
error_reporting(0);
session_start();
include 'action/config.php';
include_once 'action/loginClass.php';
// $user = new login($con);
?>

<!DOCTYPE html>
<html lang="en">
<!-- start head  -->
<?php include '../user/_head.php' ?>
<!-- end head -->
    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form class="form-signin" method="post" action="">
          <div class="panel periodic-login">
              <!-- <span class="atomic-number">28</span> -->
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">4</h1>
                  <i class="symbol">LOGIN</i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <!-- <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label> -->
                  <input type="submit" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotPassword.php">Forgot Password </a>
                    <a href="register.php">| Signup</a>
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start script -->
      <?php include '../user/_script.php' ?>
      <!-- end script -->
   </body>
   </html>
