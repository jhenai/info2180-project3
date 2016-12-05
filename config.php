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
    echo "<script> console.log('connected'); </script>";
    }
    catch(Exception $e) {
   die($e->getMessages());
   
}

?>