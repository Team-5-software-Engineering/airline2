<?php
include_once("connection.php");
if(isset($_POST['btn-save'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];	
        $phone = $_POST['phone'];	
        $name = $_POST['name'];	
	$sql = "SELECT email FROM Users WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);		
	if(!$row['email']){	
		$sql = "INSERT INTO Users(`username`, `password`, `email`, `password`, `phoneno`,`name`) VALUES ('$username','$email','$password','$phone','$name')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
		echo "registered";
	} else {				
		echo "1";	 
	}
}
?