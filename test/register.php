
<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/signup.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form name="form" id="form" method="post">
                    <div id="error_msg"></div>
					<div>
					  <input class="text" type="text" name="name" placeholder="Name" id="name" >
				      <span></span>
					</div>
					<br>
					<div>
					  <input class="text" type="text" name="username" placeholder="Username" id="username" required="">
					  <span id="un"></span>
					</div>
					<div> 
					  <input class="text email" type="email" name="email" placeholder="Email" id="email" required="">
					  <span id="em"></span> 
					</div>
					<div> 
					  <input class="text" type="password" name="password" placeholder="Password" id="password" required="">
					  <span id="p1"></span>
                      <script>
                          password.onblur=function() {
                                  if(password.value==''){
                                    p1.innerHTML="Please type a password";
                                    document.getElementById("p1").style.color="red";  
                                  }
                                  else{
                                    p1.innerHTML=""; 
                                  }
                          }
                      </script>
					</div>
					<div>  
					  <input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" required="">
                      <span id="p2"></span>
                      <script>
                          cpassword.onblur=function() {
                                  if(password.value==cpassword.value){
                                    p2.innerHTML="Passwords matching!";
                                    document.getElementById("p2").style.color="green";  
                                  }
                                  else{
                                      p2.innerHTML="Passwords not matching!";
                                      document.getElementById("p2").style.color="red";
                                  }
                          }
                      </script>
					</div> 
					<div> 
					  <input class="text" type="text" name="phone"   placeholder="Phone Number" required="" id="phone">
                      <span id="ph"></span> 
                      <script>
                          var phoneNum = /^\d{10}$/; 
                          phone.onchange=function(){
                               if(phone.value.match(phoneNum)) {
				                    ph.innerHTML="";
                               }
                              else {
                                   ph.innerHTML="Invalid Phone number!";
                                   document.getElementById("ph").style.color="red";
                              }
                            }    
                      </script>
					</div>   
					<br>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input id="reg_btn" type="submit" name="signup" value="SIGNUP">
				</form>
				<p>Already have an account? <a href="index.html" style="text-decoration:3px solid black underline ;"> Login</a></p>
			</div>
		</div>
		
	</div>
</body>
</html>
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../js/script.js"></script>

