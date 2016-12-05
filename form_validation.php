<?php

session_start();
// sanitize

$host = "localhost";
$dbname = "mail";
$username = getenv("C9_USER"); // get cloud9 username to connect to database
$password = '';
$port = 3306;

try {
    
    $conn = mysqli_connect($host, $username, $password, $dbname, $port);
      
     if (!empty($_GET['username'])){
       
       $usernameErr = $passwordErr = $username = $password = "";
        $username= $_GET["username"];
        $password= $_GET["password"];
        
        $sql= 'SELECT password FROM user where firstname = "' . $username . '"';
        
            $result =  mysqli_query($conn, $sql);
            if($result->num_rows == 0) {
                echo "<script> alert('user does not exist')</script>";
                
              //  echo "<br>Username does not exist";
               // echo "<script> window.location.href = 'login.php'; </script>"; 

                return false;}
                else{
            $row = mysqli_fetch_assoc($result);
            $stored_password= $row['password'];
            
             if (password_verify($password, $stored_password)){
             /*echo "<script>
                   var httpRequest; 
                   if (window.XMLHttpRequest) { 
                         httpRequest = new XMLHttpRequest();  
                   }
                   httpRequest.onreadystatechange = function(){
             
               if (httpRequest.readyState === XMLHttpRequest.DONE) {
                   if (httpRequest.status === 200) {
                         
                          console.log('script in php');
                          
                   }
                   else{ console.log('CONNECTION ERROR');
                      
               }
                   
               }
                   } </script>";
                           
                           */
             $_SESSION['login_user'] = " $username";
             echo "<script> window.location.href = 'index.php'; </script>";  // send them to the home page on a succesfull login
             //include 'index.php';
             //echo "<script> alert('so i guess include worked')</script>";
            }else{
             echo "<script> alert('incorrect password')</script>";
             // echo "<script> window.location.href = 'login.php'; </script>"; 
              return false;
            }
                    
                }
        
   
       
     }
    
  if (isset($_POST["registerButton"])) {
    
        $firstnameErr = $lastnameErr = $usernameErr = $passwordErr = "";
        $firstname = $lastname = $username = $password =  "";
        $fname= $_POST["firstname"];
        $lname= $_POST["lastname"];
        $uname= $_POST["username"];
        $pass= $_POST["password"];
    
        if (empty($_POST["firstname"])) {
            $firstnameErr = "First name is required";
            echo $firstnameErr;
        } else {
   
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            $firstnameErr = "Only letters and white space allowed"; 
            echo $firstnameErr;
        }
        else{
            $firstname = filter_var($fname, FILTER_SANITIZE_STRING);}
    
        }
  
        if (empty($_POST["lastname"])) {
            $lastnameErr = "Last name is required";
            echo $lastnameErr;
        } else {
   
   
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastnameErr = "Only letters and white space allowed"; 
            echo $lastnameErr;
        }
        else{
            $lastname = filter_var($lname, FILTER_SANITIZE_STRING);
        }
  }
  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
    echo $usernameErr;
  } else {
  
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed"; 
       echo $usernameErr;
    }
    else{
        $username = filter_var($uname, FILTER_SANITIZE_STRING);
   
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
    echo $passwordErr;
  } else {
   
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
      $passwordErr = "Only letters and white space allowed"; 
       echo $passwordErr;
    }
    else{
       $password1 = filter_var($pass, FILTER_SANITIZE_STRING);
       $password = password_hash($password1, PASSWORD_BCRYPT, array('cost' => 12));
     
    }
  }
     $sql = "INSERT INTO user (firstname, lastname, username, password) VALUES ('" .$firstname . "', '" . $lastname . "', '" . $username . "', '" . $password . "')";
    

    if ($conn->query($sql) === TRUE) {
      echo "<br>New record created successfully for: " . $firstname . " " . $lastname ;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    } // end of submit Button
    
    $conn->close();
    
} // end of try

catch(Exception $e) {
   die($e->getMessages());
   
}
?>