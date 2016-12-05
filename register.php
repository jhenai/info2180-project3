<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Cheapo Mail </title>
        <link rel = "icon" hb ref= "http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/Mail-icon.png"/>
        <link rel= "stylesheet" type="text/css" href= "index.css">
     
        <script src="register.js" type="text/javascript"></script>
        

    </head>
   
   
    <body>
        <header><h1> Cheapo Mail </h1> </header>
            <div class= "form">
            <form action="form_validation.php" name="register" method="POST">
               <legend>User sign-in</legend><br>
               
               <label for= "firstname"> *First Name: </label>
               <input type="text" name="firstname"  id="firstname" placeholder= "John" required />
               <div id="firstname_err"></div><br>
               
               <label for= "lastname">*Last Name:</label>
               <input type="text" name="lastname"  id= "lastname" placeholder= "Brown" required/>
               <div id="lastname_err"></div><br>
               
               <label for="username">*Username: </label>
               <input type="text" name="username"  id= "username" placeholder= "johnbrown" required/>
               <div id="username _err"></div><br>
               
               <label for="password">*Password:</label>
               <input type="password" name="password"  id="password" placeholder= "********" required/>
               <div id="password_requirement">Password must have ....</div>
               <div id="password_err"></div><br>
                
               <input type="submit" value= "Add New User" id="registerButton" name= "registerButton">
            </form></div>
            
       
       
    </body>
    
</html>