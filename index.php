
<?php
   session_start();
    if(isset($_SESSION['login_user'])){
            echo "Welcome ". $_SESSION['login_user']; 
          }else{
            echo "Welcome guest";}
   
?>


<!DOCTYPE HTML>
<html>

<head>
 
</head>

<body>
      <div id="content">
        <span id="page" style="visibility: hidden">INDEX</span>
        
        <h1>Welcome to CheapoMail Services. </h1>
        <h2>Recent Messages</h2>
        <p></p>
        <span id="result"></span>
        
      </div>
   
</body>
</html>

