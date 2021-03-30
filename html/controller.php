<?php 
  include("connection.php");
  session_start();
  $formans1 = $_POST['ans1'];  
  $formans2 = $_POST['ans2'];
  if($_SESSION["ans1"]==$formans1 && $_SESSION["ans2"]==$formans2){
               unset($_SESSION['sq1']);
               unset($_SESSION['ans1']);
               unset($_SESSION['sq2']);
               unset($_SESSION['ans2']);
               unset($_SESSION['phone']);
               header("Location:resetter.php"); 
  }
  else{
    $_SESSION["msg"]="error";
    header("Location:verify.php");
  }

?>