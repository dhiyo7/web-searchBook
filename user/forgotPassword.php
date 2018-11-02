<!DOCTYPE html>
<html lang="en">
<!-- start head  -->
<?php include '../user/_head.php' ?>
<!-- end head -->
    <body id="mimin" class="form-signin-wrapper">

      <div class="container">

        <form class="form-signin">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">4</h1>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Email</label>
                    <p>Input your email to reset your password</p>
                  </div>
                  <input type="submit" class="btn col-md-12" value="Reset"/>
              </div>
              <br>
              <br>
                <div class="text-center" style="padding:5px;">
                    <a href="login.php">SignIn</a> |
                    <a href="register.php">Signup</a>
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
