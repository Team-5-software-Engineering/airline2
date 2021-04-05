<?php 
  session_start();
  include("connection.php");
  $phone = $_POST['phone']; 
  $usr=$_SESSION["username"];
  $sql = "update Users SET phone='$phone' WHERE username='$usr'";
  $con->query($sql);
  unset($_SESSION['phone']);
  $sql = "select phone from Users where username='$usr'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
  $_SESSION["phone"]=$row['phone'];
  header("Location:profile.php");
?>