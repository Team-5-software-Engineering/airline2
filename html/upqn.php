<?php 
  if(!$_SESSION["username"])
  {
    header('Location: http://localhost/airline/html/index.php');
  }
  else if(!$_SESSION["go"])
  {
    header('Location: http://localhost/airline/html/profile.php');
  }
  unset($_SESSION["go"]);
  session_start();
  include("connection.php");
  $sq1 = $_POST['sq1']; 
  $ans1 = $_POST['ans1'];
  $sq2 = $_POST['sq2'];
  $ans2 = $_POST['ans2'];
  $usr=$_SESSION["username"];
  $sql="update Users set q1='$sq1' where username='$usr'";
  $sql1="update Users set ans1='$ans1' where username='$usr'";
  $sql2="update Users set q2='$sq2' where username='$usr'";
  $sql3="update Users set ans2='$ans2' where username='$usr'";
  $con->query($sql);
  $con->query($sql1);
  $con->query($sql2);
  $con->query($sql3);
  $_SESSION["yes"]="true";
  header("Location:profile.php");
?>