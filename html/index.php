
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Airline Ticket Booking</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form name="f1" class="login100-form validate-form p-b-33 p-t-5" method="post" action="authentication.php">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type = "text" id ="user" name  = "user" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type = "password" id ="pass" name  = "pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
                    <span id="error"></span>
                    <span id="success"></span>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
							<input type="submit" value="" name="login">
						</button>
					</div>
					<div class="text-center p-t-55">
						<span class="txt1">
							Don’t have an account?
						</span>
						<a class="txt2" href="signup.php">
							Sign Up
						</a>
					<br><br>or
					<br><br><a class="txt2" href="reset.php">
						Forgot Password?
					</a>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script>  
		function validation()  
		{  
			var id=document.f1.user.value;  
			var ps=document.f1.pass.value;  
			if(id.length=="" && ps.length=="") {  
				alert("User Name and Password fields are empty");  
				return false;  
			}  
			else  
			{  
				if(id.length=="") {  
					alert("User Name is empty");  
					return false;  
				}   
				if (ps.length=="") {  
				alert("Password field is empty");  
				return false;  
				}  
			}                             
		}  
	</script> 



</body>
</html>
<?php 
  session_start();
  if(isset($_SESSION['message'])){
      echo "<script>document.getElementById('error').innerHTML='Incorrect username and/or password!';</script>";
      unset($_SESSION['message']);
  }
  elseif(isset($_SESSION['msg'])){
    echo "<script>document.getElementById('success').innerHTML='Password reset successfully!';</script>";
    unset($_SESSION['msg']);
 }
 elseif(isset($_SESSION['mg'])){
    echo "<script>document.getElementById('success').innerHTML='User created successfully!';</script>";
    unset($_SESSION['mg']);
 }
 elseif(isset($_SESSION['m'])){
    echo "<script>document.getElementById('success').innerHTML='Logged out successfully!';</script>";
    unset($_SESSION['m']);
 }
?>
<style>
    #error{
        margin-left:50px;
        text-align:center;
        color:red;
    }
    #success{
        margin-left:50px;
        text-align:center;
        color:green;
    }
</style>