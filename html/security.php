<?php 
  session_start();
  include("connection.php");
  $password = $_POST['password']; 
  $usr=$_SESSION["username"];
  $sql = "select password from Users WHERE username='$usr'";
  $con->query($sql);
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
  if($password==$row['password']){
      $_SESSION["secure"]="true";
      header("Location:qn.php");
  }
  else{
    $_SESSION["msg"]="false";  
    header("Location:profile.php");
  }
?>
