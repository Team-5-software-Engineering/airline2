<?php 
  session_start();
  include("connection.php");
  $email = $_POST['email']; 
  $usr=$_SESSION["username"];
  $sql = "update Users SET email='$email' WHERE username='$usr'";
  $con->query($sql);
  unset($_SESSION['email']);
  $sql = "select email from Users where username='$usr'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
  $_SESSION["email"]=$row['email'];
  header("Location:profile.php");
?>