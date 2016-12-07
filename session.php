<?php

include('config.php');

session_start();

$user_check = $_SESSION['login_user'];
$ID =  $_SESSION['user_id'];
   
   echo "<script> console.log('$user_check : $ID'); </script>";
   
   $ses_sql = mysqli_query($conn,"select username from user where firstname = '$user_check' ");
   
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:mail_login.php");
  }

?>



