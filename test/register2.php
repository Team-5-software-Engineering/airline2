<?php      
   $host = "localhost";  
        $user = "root";  
        $password = "newpass";  
        $db_name = "airline"; 
          
        $con = mysqli_connect($host, $user, $password, $db_name);
    if (isset($_POST['save'])) { 
       $host = "localhost";  
        $user = "root";  
        $password = "newpass";  
        $db_name = "airline"; 
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
         }  
        if (isset($_POST['save'])) {
          $name=filter_input(INPUT_POST, "name");   
          $username = filter_input(INPUT_POST, "username");  
          $password = filter_input(INPUT_POST, "password");  
          $email= filter_input(INPUT_POST, "email");  
          $phone = filter_input(INPUT_POST, "phone");           
          
            $sql = "INSERT INTO Users (username,email,password,phoneno,name) VALUES ('$username','$email','$password','$phone','$name') ";  
          if ($con->query($sql) === TRUE) {
               echo "<h1 id='success'><center>New user created successfully</center></h1>";
               echo "<br>";
               echo "<h1><center>You can now <a id='success' href='index.html'>Login</a><center></h1>"; 
           }
           else {
               echo "Error: " . $sql . "<br>" . $conn->error;
             } 
          mysqli_close($con);
      }
     }
     else{
       echo "Error:Fill the signup form correctly! ";
       print_r($_POST['save']);
     }
        mysqli_close($con);
?> 
