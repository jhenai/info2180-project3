<!DOCTYPE HTML>
<html>

<head> 
<title>CheapoMail Login</title> 
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="mail_loginValidate.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="index.css" />
 
    </head>
        
<body>
        <?php include 'mail_loginValidate.php';
            
          
          session_unset();
          session_destroy();
         
        ?>

                              
            <p><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="login" method= "post" onsubmit= "return validateForm()">
                              <div class="container">
                                
                                <div id="login-form">
                                <h3>  CHEAPO MAIL </br> USER LOGIN</h3>
                                
                                <div id="login">
                                    
                                <fieldset>
                                 
                                <!--<label><b>Username</b></label>-->
                                <input type="text" placeholder="Enter Username" name="username">
                                <div id=usernameErr></div> <span class="error"> <?php echo $usernameErr;?> </span> <span>  <?php echo $userErr;?> </span>

                            
                                <!--<br><label><b>Password</b></label>-->
                                <input type="password" placeholder="Enter Password" name="password"  onchange="return validateForm()">
                                <div id=passwordErr></div>  <span class="error"><?php echo $passwordErr;?></span>  <span>  <?php echo $pwdErr;?> </span>
                                
                                </br></br>
                                <a href="#">Admin user begin with 'Admin'</a>
                                <span class="info"></span>
                                <button type="submit" id= "loginButton" name= "loginButton">Login</button>
                               
                               
                               </div>
                              </div>
                             
                            
                        </form>
                        
                        <fieldset>
                        </div>
                        
                      

</body>


</html>