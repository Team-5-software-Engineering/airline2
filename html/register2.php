<?php      
        $host = "localhost";  
        $user = "root";  
        $password = "newpass";  
        $db_name = "airline"; 
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        $name=filter_input(INPUT_POST, "name");   
        $username = filter_input(INPUT_POST, "Username");  
        $password = filter_input(INPUT_POST, "password");  
        $email= filter_input(INPUT_POST, "email");  
        $phone = filter_input(INPUT_POST, "phone"); 
        $sq1=filter_input(INPUT_POST, "sq1"); 
        $ans1=filter_input(INPUT_POST, "ans1"); 
        $sq2=filter_input(INPUT_POST, "sq2"); 
        $ans2=filter_input(INPUT_POST, "ans2"); 
        date_default_timezone_set("Asia/Calcutta");
        $t=date("Y-m-d H:i:s");           
          
            $sql = "INSERT INTO Users (username,email,password,phone,name,joined_on,q1,ans1,q2,ans2) VALUES ('$username','$email','$password','$phone','$name','$t','$sq1','$ans1','$sq2','$ans2') ";  
         if ($con->query($sql) === TRUE) {
               session_start();
               $_SESSION["mg"]="done";
               header("Location:index.php");
           }
           else {
               echo "Error: " . $sql . "<br>" . $con->error;
             }
          mysqli_close($con);
?> 
<style>
  #success {
    color:green;
    font-family:sans-serif;
  }
  #fail {
    color:red;
    font-family:sans-serif;
  }
</style> 