<?php
 include("connection.php");
 session_start();
 date_default_timezone_set("Asia/Calcutta");
 $t=date("Y-m-d H:i:s");
 $username=$_SESSION["username"];
 $sqll = "INSERT INTO Log (username,timestamp,privelege,operation) VALUES ('$username','$t','user','logout') ";
 $con->query($sqll);
 $_SESSION["m"]="done";
 unset($_SESSION["username"]);
 unset($_SESSION["name"]);
 header("Location:http://localhost/airline/html/index.php");
?>