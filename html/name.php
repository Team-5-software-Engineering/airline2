<?php 
  session_start();
  include("connection.php");
  $name = $_POST['name']; 
  $user=$_SESSION["username"];
  $sql = "update Users SET name='$name' WHERE username='$user'";
  $con->query($sql);
  unset($_SESSION['name']);
  $sql = "select name from Users where username = '$user'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
  $_SESSION["name"]=$row['name'];
  header("Location:profile.php");
?>