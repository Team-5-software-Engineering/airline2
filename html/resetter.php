<?php 
  session_start();
  if(!$_SESSION["username"])
  {
    header('Location: http://localhost/airline/html/verify.php');
  }
?>
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
				<form class="login100-form validate-form" method="post" action="resetdb.php">
					<div class="login100-form-avatar">
					</div>
					<div class="text-center">
							<h2><i class="fa fa-lock fa-4x"></i></h2>
						<h2 class="text-center">Reset Password</h2>
						<br>
                  <h3><p><font color="white">You can type your new password here.</font></p></h3>
				  <br>
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "This field is required">
						<input class="input100" type="password" id="password" name="password" placeholder="New password">
						<span id="p1" class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input m-b-10" id="cpassword" data-validate = "This field is required">
						<input class="input100" type="password" name="cpassword"  placeholder="Confirm password">
						<span id="p1" class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                        <span id="cp"></span>
                        <script>   
						 document.getElementById("cpassword").onchange=function() {
								                                        myFunction():
						  };
                         function myFunction(){
                            if(password.value==cpassword.value){
								  cp.innerHTML="Passwords matching!";
								  document.getElementById("cp").style.color="green"; 
								  cp="true"; 
								}
								else{
									cp.innerHTML="Passwords not matching!";
									document.getElementById("cp").style.color="red";
									cp="false";
								};
                         }                                           
					</script>
					</div>
                    <span id="error"></span>
					<div class="container-login100-form-btn p-t-10">
						<button type="submit" id="btn" class="login100-form-btn">
							Reset Password
						</button>
					</div>
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
<script>
    setInterval(function(){if(cp=="false"){
                            document.getElementById("btn").disable=true;
                           }
                           else{
                               document.getElementById("btn").disable=false;}},0);
</script>
