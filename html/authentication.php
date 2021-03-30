<?php      
        $host = "localhost";  
        $user = "root";  
        $password = "newpass";  
        $db_name = "airline";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }   
        $username = $_POST['user'];  
        $password = $_POST['pass'];  
          
  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select *from Users where username = '$username' and password = '$password'";  
            $sqlp = "select *from Admin where username = '$username' and password = '$password'"; 
            $result = mysqli_query($con, $sql); 
            $resultp = mysqli_query($con, $sqlp); 
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            $rowp = mysqli_fetch_array($resultp, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
            $countp = mysqli_num_rows($resultp);
              
            if($count == 1){  
                session_start();
                $_SESSION["name"]=$row['name'];
                $_SESSION["username"]=$row['username'];
                date_default_timezone_set("Asia/Calcutta");
                $t=date("Y-m-d H:i:s");
                $sqll = "INSERT INTO Log (username,timestamp,privelege,operation) VALUES ('$username','$t','user','login') ";
                $con->query($sqll);
                header("Location: book_tickets.php");
            }  
            else if($countp==1){
                echo "<h1 id='success'><center> Login successful </center></h1>";  
                echo "<br>";
                echo "<h1><center>Welcome Admin $username</center></h1>";
            }
            else{  
                session_start();
                $_SESSION["message"]="error";
                header("Location:index.php");
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