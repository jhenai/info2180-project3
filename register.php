
<!DOCTYPE html>
<html>
    <head>
        <script src="register.js" type="text/javascript"></script>
        

    </head>
   
   
    <body>
        <header><h1> Cheapo Mail </h1> </header>
            <span id="page" style="visibility: hidden">REGISTRATION</span>
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
               <div id="password_requirement">"Password must have  at least one number and one letter, and one capital letter and are at least 8 characters long"</div>
               <div id="password_err"></div><br>
                
               <input type="submit" value= "Add New User" id="registerButton" name= "registerButton">
            </form></div>
            
       
       
    </body>
    
</html>