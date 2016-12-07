<?php
    session_start();

    function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
     }
     
  
      
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        include ("config.php"); 
        $userType = $usernameErr = $passwordErr = $username = $password = $userErr = $pwdErr= "";
        
      
        if (empty($_POST["username"])) {
                $usernameErr = "Username is not entered.";
              } else {
                $username = test_input($_POST["username"]);
               
              }
              
         if (empty($_POST["password"])) {
                $passwordErr = "Password is not entered";
              } else {
                $password = test_input($_POST["password"]);
              
        
          $sql= 'SELECT * FROM user where username = "' . $username . '"';
          $result =  mysqli_query($conn, $sql);
          if($result->num_rows == 0) {
                 $userErr = "User does not exist. Please try again";
          }else{
                  $row = mysqli_fetch_assoc($result);
                  $stored_password= $row['password'];
                  $id= $row['id'];
                  $fname=$row['firstname'];
                  $lname=$row['lastname'];
                  $newpwd = md5($password);
                  if ( $newpwd === $stored_password){
                      $_SESSION['login_user'] = $username;//new CurrentUser variable created
                      $_SESSION['user_id'] = $id;
                      $_SESSION['fname'] = $fname;    
                      $_SESSION['lname'] = $lname;
                      
                      header("Location: no-refresh.php"); // Redirecting To Home Page
                      exit();
                  }else{
                      $pwdErr = "Password is incorrect";
                  }
                      
          }
          
          }// end of password is not empty
        
    }// end of ($_SERVER["REQUEST_METHOD"] == "POST")


?>