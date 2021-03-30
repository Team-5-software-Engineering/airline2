<?php 
  include("connection.php");
  session_start();
  $newpasswd = $_POST['password'];
  $usrname=$_SESSION["username"];
  $sql3="Update Users set password='$newpasswd' where username='$usrname'";
  $con->query($sql3);
  $_SESSION["msg"]="Done";
  unset($_SESSION['username']);
  header("Location:index.php");
?>