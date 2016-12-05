<?php
   include('session.php');
?>


<!DOCTYPE HTML>
<html>

<head>
  <title> Cheapo Mail </title>
  <link rel = "icon" hb ref= "http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/Mail-icon.png"/>
  <link rel = "icon" hb ref= "http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/Mail-icon.png"/>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="homepage.js"></script>
  <script src="register.js" type="text/javascript"></script>
        
  <link rel="stylesheet" type="text/css" href="homepage/style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Cheapo<span class="logo_colour">Mail</span></a></h1>
          <h2>Messaging Server With Adjax.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="inbox.php">Inbox</a></li>
          <li class="selected"><a href="registration.php">Registration</a></li>
          <li><a href="compose.php">Compose Message</a></li>
          <li><a href="logout.php">LogOut</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Latest News</h1>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h1>Useful Links</h1>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="homepage/style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
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
                
               <input type="submit" value= "Add New User" id="registerButton" name= "registerButton" class= 'btn'>
          </form></div>
        </div>
    </div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
</body>
</html>
