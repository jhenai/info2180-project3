<?php 

    session_start();
    
    if(session_destroy()) {
      header("Location: login.php");
      echo "<script> console.log('Destroyed'); </script>";
   }


?>