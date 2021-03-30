<?php 
  $db = mysqli_connect('localhost', 'root', 'newpass', 'airline');
  if (isset($_POST['username_check'])) {
  	$username = $_POST['username'];
  	$sql = "SELECT * FROM Users WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['email_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM Users WHERE email='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['save'])) {
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];
  	$sql = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";	
  	  exit();
  	}else{
  	 
          $name=filter_input(INPUT_POST, "name");   
          $username = filter_input(INPUT_POST, "username");  
          $password = filter_input(INPUT_POST, "password");  
          $email= filter_input(INPUT_POST, "email");  
          $phone = filter_input(INPUT_POST, "phone");           
          
            $sql = "INSERT INTO Users (username,email,password,phoneno,name) VALUES ('$username','$email','$password','$phone','$name') ";  
          if ($con->query($sql) === TRUE) {
               echo "<h1 id='success'><center>New user created successfully</center></h1>";
               echo "<br>";
               echo "<h1><center>You can now <a id='success' href='index.html'>Login</a><center></h1>"; 
           }
           else {
               echo "Error: " . $sql . "<br>" . $conn->error;
             } 
  	  exit();
  	}
   }
?>