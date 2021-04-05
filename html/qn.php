<?php 
  session_start();
  if(!$_SESSION["username"])
  {
    header('Location: http://localhost/airline/html/index.php');
  }
  else if(!$_SESSION["secure"])
  {
    header('Location: http://localhost/airline/html/profile.php');
  }
  unset($_SESSION["secure"]);
  $_SESSION["go"]="true";
?> 
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $_SESSION['name']; ?>&apos;s Security</title>
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/profile.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&family=Manrope:wght@300&display=swap" rel="stylesheet"> 
  </head>
  <body>
   <div class="dropdown">
     <button onclick="myFunction()" class="dropbtn"><?php echo $_SESSION["name"]; ?><h6>&darr;</h6></button>
     <div id="myDropdown" class="dropdown-content">
        <a href="book_tickets.php">Home</a>
        <a href="#">My Flights</a>
        <a href="logout.php">Logout</a>
     </div>
   </div>    
   <div id="box" id="table">
     <div id="boxcol1">
       <img id="usrimg" src="../images/user.png">      
       <h1><?php echo $_SESSION['name']; ?>&apos; Security profile</h1>
       <h3>Set up your security questions.</h3>
     </div> 
     <div id="boxcol2">
        <h2>SECURITY QUESTIONS</h2>
        <br>
        <div> 
            <form id="form" method="post" action="upqn.php">
                    <div>
					  <span  style="font-family:'Catamaran',sans-serif">Choose secret question 1: </span>
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
					  <input class="text"  style="font-family:'Catamaran',sans-serif" type="text" name="ans1" placeholder="Type answer for Secret question 1" id="ans1" required="">
					</div> 
					<br>
					<div> 
					  <span style="font-family:'Catamaran',sans-serif">Choose secret question 2: </span>
					  <span id="sq2"  style="font-family:'Catamaran',sans-serif"></span> 
                      <select name="sq2"  style="font-family:'Catamaran',sans-serif" >
											<option value="Who is your favorite relative?">Who is your favorite relative?</option>
											<option value="Your nickname?">Your nickname?</option>
											<option value="Your favorite movie?">Your favorite movie?</option>
											<option value="Your secret?">Your secret?</option>
											<option value="Your dream car?">Your dream car?</option>
					  </select>
					  <span class="select-arrow"></span>
					</div> 
					<br> 
					<div> 
					  <input class="text"  style="font-family:'Catamaran',sans-serif" type="text" name="ans2" placeholder="Type answer for Secret question 2" id="ans2" required="">
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
                    <br>
                    <button id="button62" style="text-align:center" type="submit">Submit</button>   
     </div>
   </div> 
  </body>
</html>
<script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
           var openDropdown = dropdowns[i];
           if (openDropdown.classList.contains('show')) {
             openDropdown.classList.remove('show');
           }
        }
      }
    }
    function openNav1() {
      document.getElementById("myNav1").style.width = "100%";
    }

/* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav1() {
      document.getElementById("myNav1").style.width = "0%";
    } 
    function openNav2() {
      document.getElementById("myNav2").style.width = "100%";
    }

/* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav2() {
      document.getElementById("myNav2").style.width = "0%";
    } 
    function openNav3() {
      document.getElementById("myNav3").style.width = "100%";
    }

/* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav3() {
      document.getElementById("myNav3").style.width = "0%";
    }  
    function openNav4() {
      document.getElementById("myNav4").style.width = "100%";
    }

/* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav4() {
      document.getElementById("myNav4").style.width = "0%";
    }   
    function openNav5() {
      document.getElementById("myNav5").style.width = "100%";
    }

/* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav5() {
      document.getElementById("myNav5").style.width = "0%";
    }        
</script>
<?php 
 if(isset($_SESSION['msg'])){
    echo "<script>document.getElementById('error').innerHTML='Access Denied!';</script>";
    unset($_SESSION['msg']);
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