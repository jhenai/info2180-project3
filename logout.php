<?php
   session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  
</head>

<body>
    <?php
        if (isset($_GET['logout'])){
          session_unset();
          session_destroy();
          
            header("Location: login.php");
            echo "<script> console.log('Destroyed'); </script>";}
        
        if(isset($_SESSION['login_user'])){
            echo "Welcome ". $_SESSION['login_user']; 
          }else{
            echo "Welcome guest";}
      ?>
     
     
      <div id="content">
        <span id="page" style="visibility: hidden">LOGOUT</span>
        <h1>Contact Us</h1>
        <p>Below is an example of how a contact form might look with this template:</p>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
        </form>
        <p><br /><br />NOTE: A contact form such as this would require some way of emailing the input to an email address.</p>
      </div>
    </div>
    
</body>
</html>


