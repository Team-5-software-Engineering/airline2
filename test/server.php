<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'newpass', 'airline');

// REGISTER USER
if (isset($_POST['reg_btn'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['Username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);

  	$query = "INSERT INTO Users (username, email, password,phoneno,name) 
  			  VALUES('$username', '$email', '$password','$phone','$name')";
  	mysqli_query($db, $query);
  	echo "<h1><center>You are now Registerd successfully!</center></h1>";
        echo "<br>";
        echo "<h1><center>You can now <a href='index.html'>Login!</center></h1>";
}