<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/lock.png"/>
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/utilpr.css">
	<link rel="stylesheet" type="text/css" href="../css/mainpr.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img2.jfif');">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="wrap-login100 p-t-2 p-b-200">
				<form class="login100-form validate-form" method="post" action="check.php">
					<div class="login100-form-avatar">
					</div>
					<div class="text-center">
							<h2><i class="fa fa-lock fa-4x"></i></h2>
						<h2 class="text-center">Forgot Password?</h2>
						<br>
                  <h3><p><font color="white">You can reset your password here.</font></p></h3>
				  <br>
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
                    <span id="error"></span>
					<div class="container-login100-form-btn p-t-10">
						<button type="submit" class="login100-form-btn">
							Reset Password
						</button>
					</div>
                    <br>or
                    <h6>Remember your password?<a style="color:white;text-decoration:underline" href="index.php">Login</a></h6>
				</form>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php 
  session_start();
  if(isset($_SESSION['message'])){
      echo "<script>document.getElementById('error').innerHTML='Username does not exist!';</script>";
      unset($_SESSION['message']);
  }
?>
<style>
    #error{
        margin-left:10px;
        text-align:center;
        color:red;
    }
</style>