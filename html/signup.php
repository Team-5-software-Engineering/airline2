<?php include("process.php"); ?>
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
				<form  method="post" action="register2.php">
					<div>
					  <input class="text" type="text" name="name" placeholder="Name" id="name" >
				      <span></span>
					</div>
					<br>
					<div>
					  <input class="text" type="text" name="Username" placeholder="Username" id="username" required="">
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
								  p1="false"; 
								}
								else{
								  p1.innerHTML=""; 
								  p1="true";
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
								  pass="true"; 
								}
								else{
									p2.innerHTML="Passwords not matching!";
									document.getElementById("p2").style.color="red";
									pass="false";
								}
						}
					</script>
					</div> 
					<div> 
					  <input class="text" type="text" name="phone" placeholder="Phone Number" required="" id="phone">
					  <span id="ph"></span> 
                      <script>
                          var phoneNum = /^\d{10}$/; 
                          phone.onblur=function(){
                               if(phone.value.match(phoneNum)) {
				                    ph.innerHTML="";
									pn="true";
                               }
                              else {
                                   ph.innerHTML="Invalid Phone number!";
                                   document.getElementById("ph").style.color="red";
								   pn="false";
                              }
                            }    
                      </script>
					</div>
					<br>
					<div> 
					  <span style="color:white">Choose secret question 1: </span>
					  <span id="sq1"></span> 
                      <select name="sq1" >
					                        <option value="Who is your best friend?">Who is your best friend?</option>
											<option value="Your happiest day?">Your happiest day?</option>
											<option value="Your native place?">Your native place?</option>
											<option value="Your secret spot?">Your secret spot?</option>
											<option value="Your favourite song?">Your favourite song?</option>
					  </select>
					  <span class="select-arrow"></span>
					</div> 
					<br> 
					<div> 
					  <input class="text" type="text" name="ans1" placeholder="Type answer for Secret question 1" id="ans1" required="">
					  <span id="ansq1"></span>
					  <script>
						ans1.onblur=function() {
								if(ans1.value==''){
								  ansq1.innerHTML="Please type a response!";
								  document.getElementById("ansq1").style.color="red"; 
								  ans1="false"; 
								}
								else{
								  ansq1.innerHTML=""; 
								  ans1="true";
								}
						}
					 </script>
					</div> 
					<br>
					<div> 
					  <span style="color:white">Choose secret question 2: </span>
					  <span id="sq2"></span> 
                      <select name="sq2">
											<option value="Who is your best friend?">Who is your best friend?</option>
											<option value="Your happiest day?">Your happiest day?</option>
											<option value="Your native place?">Your native place?</option>
											<option value="Your secret spot?">Your secret spot?</option>
											<option value="Your favourite song?">Your favourite song?</option>
					  </select>
					  <span class="select-arrow"></span>
					</div> 
					<br> 
					<div> 
					  <input class="text" type="text" name="ans2" placeholder="Type answer for Secret question 2" id="ans2" required="">
					  <span id="ansq2"></span>
					  <script>
						ans1.onblur=function() {
								if(ans2.value==''){
								  ansq1.innerHTML="Please type a response!";
								  document.getElementById("ansq2").style.color="red"; 
								  ans2="false"; 
								}
								else{
								  ansq2.innerHTML=""; 
								  ans2="true";
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
					<input type="submit" id="btn" name="signup" value="SIGNUP" onclick="checker()">
					<span id="error"></span>
				</form>
				<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
                <script src="../js/script.js"></script>
				<script>
				 setInterval(function(){if(pass=="false"||em=="false"||un=="false"||pn=="false"||p1=="false"|| ans1=="false"|| ans1="false"){  
						document.getElementById("btn").disabled = true;
						document.getElementById("error").innerHTML ="<center>Please fix errors in form to signup!</center>";
						document.getElementById("error").style.color ="orange";
					 }else{document.getElementById("btn").disabled = false;document.getElementById("error").innerHTML ="";}},0);	 
				 	    	
				</script>
				<p>Already have an account? <a href="index.php" style="text-decoration:3px solid black underline ;"> Login</a></p>
			</div>
		</div>
		
	</div>
</body>
</html>

