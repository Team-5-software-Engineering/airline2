<?php 
  session_start();
  include("connection.php");
  $username = $_POST['username']; 
  $oldusr=$_SESSION["username"];
  $email=$_SESSION["email"];
  $sql1 = "update Log SET username='$username' WHERE username='$oldusr'";
  $con->query($sql1);
  $sql = "update Users SET username='$username' WHERE email='$email'";
  $con->query($sql);
  unset($_SESSION['username']);
  $sql = "select username from Users where email = '$email'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
  $_SESSION["username"]=$row['username'];
  header("Location:profile.php");
?>