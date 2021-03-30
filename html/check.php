<?php 
  include("connection.php");
  $username=$_POST['username'];
  $username = stripcslashes($username);
  $sql="Select*FROM Users where username='$username'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if($count==1){
      session_start();
      $_SESSION["username"]=$row['username'];
      $_SESSION["phone"]=$row['phone'];
      $_SESSION["sq1"]=$row['q1'];
      $_SESSION["ans1"]=$row['ans1'];
      $_SESSION["sq2"]=$row['q2'];
      $_SESSION["ans2"]=$row['ans2'];
      header("Location:verify.php");
  }
  else{
      session_start();
      $_SESSION["message"]="error"; 
      header("Location:reset.php"); 
  }
?>
