<?php 
  session_start();
  if(!$_SESSION["username"])
  {
    header('Location: http://localhost/airline/html/index.php');
  }
?> 
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $_SESSION['name']; ?>&apos;s Profile</title>
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
     <h1><?php echo $_SESSION['name']; ?>&apos;s Profile</h1>
     <h3>Welcome to your profile <br>page,<?php echo $_SESSION['name']; ?>.Here you can<br> view/edit your account<br> information.</h3>
    </div> 
    <div id="boxcol2">
        <h2>ACCOUNT INFO</h2>
        <br>
        <h3>Name:  <span id="ans">&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['name']; ?></span>&nbsp;<button  class="button61" onclick="openNav1()">&#128393;</button></h3>
        <h3>Username: <span id="ans">&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></span>&nbsp;<button  class="button61" onclick="openNav2()">&#128393;</button></h3>
        <h3>Email-id:    <span id="ans">&nbsp;&nbsp;<?php echo $_SESSION['email']; ?></span>&nbsp;<button  class="button61" onclick="openNav3()">&#128393;</button></h3>
        <h3>Phone:   <span id="ans">&nbsp;&nbsp;<?php echo $_SESSION['phone']; ?></span>&nbsp;<button id="show" class="button61" onclick="openNav4()">&#128393;</button></h3>
        <div id="myNav1" class="overlay">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
          <form id="form" class="overlay-content" method="post" action="name.php">
             <h3 id="edit">Name:</h3>
             <br>
             <input type="text" name="name" placeholder="Type your preferred Name.." required="">
             <br>
             <br>
             <button id="button62" type="submit">Submit</button>
          </form>
        </div>
        <div id="myNav2" class="overlay">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
          <form id="form" class="overlay-content" method="post" action="username.php">
             <h3 id="edit">Username:</h3>
             <br>
             <input type="text" name="username" placeholder="Type your preferred username.." required="">
             <br>
             <br>
             <button id="button62" type="submit">Submit</button>
          </form>
        </div>
        <div id="myNav3" class="overlay">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
          <form id="form" class="overlay-content" method="post" action="email.php">
             <h3 id="edit">Email-id:</h3>
             <br>
             <input type="text" name="email" placeholder="Type your preferred emailid.." required="">
             <br>
             <br>
             <button id="button62" type="submit">Submit</button>
          </form>
        </div>
        <div id="myNav4" class="overlay">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
          <form id="form" class="overlay-content" method="post" action="phone.php">
             <h3 id="edit">Phone:</h3>
             <br>
             <input type="text" name="phone" id="phone" placeholder="Type your preferred phoneno.." pattern="[0-9]{10}" required>
             <br>
             <span id="ph"></span> 
             <script>
                var phoneNum = /^\d{10}$/; 
                phone.onblur=function(){
                               if(phone.value.match(phoneNum)) {
				                    ph.innerHTML="";
									pn="true";
                                    document.getElementById("p1").disabled=true;
                               }
                              else {
                                   ph.innerHTML="Invalid Phone number!";
                                   document.getElementById("ph").style.color="red";
								   pn="false";
                                   document.getElementById("p1").disabled=false;
                              }
                            }    
             </script>
             <br>
             <br>
             <button id="button62 p1" type="submit">Submit</button>
          </form>
        </div>
        <div id="myNav5" class="overlay">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav5()">&times;</a>
          <form id="form" class="overlay-content" method="post" action="security.php">
             <h3 id="edit">Type your password to proceed:</h3>
             <br>
             <input type="password" name="password" placeholder="Password" required="">
             <br>
             <br>
             <button id="button62" type="submit">Submit</button>
          </form>
        </div>
        <button id="button62"  onclick="openNav5()">Security settings</button>
        <span id="error"></span>
        <span id="success"></span>
        <br>
        <span id="ans2">Member since <?php echo $_SESSION["joinedon"];?></span>
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
 else if(isset($_SESSION['yes'])){
    echo "<script>document.getElementById('success').innerHTML='Updated Successfully!';</script>";
    unset($_SESSION['yes']);
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