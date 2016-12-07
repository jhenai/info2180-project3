<?php
   session_start();
   include("session.php");
   
?>
<!DOCTYPE HTML>
<html>

<head>
  <title> Cheapo Mail </title>
  <link rel = "icon" href= "http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/Mail-icon.png"/>
  
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  
  <link rel="stylesheet" type="text/css" href="index.css" />
  <link rel="stylesheet" type="text/css" href="homepage/style/style.css" />
 
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Cheapo<span class="logo_colour">Mail</span></a></h1>
          <h2>Messaging Server With Ajax.</h2>
          <div>
            
          </div>
          
          
        </div>
      </div>
      <nav id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a id="nav-index" href="index.php">Home</a></li>
          <li><a id="nav-inbox" href="inbox.php">Inbox</a></li>
          <?php
              $user = $_SESSION['login_user'];
            if( substr("$user",0,5) == 'Admin'){
              echo '<li><a id="nav-registration" href="register.php">Register New User</a></li>';
            }
          ?>
          <li><a id="nav-compose" href="compose.php">Compose Message</a></li>
          <!--<li><a id="nav-logout"href="logout.php?logout=1">LogOut</a></li>-->
          <li><button id='LOGOUT' type= 'submit' value='submit' >LOG-OUT</button></li>
        </ul>
      </nav>
    </div>
    <div id="site_content">
        
      <div class="sidebar">
        <span id="errors"></span>
        
        <span id = 'messageArea'>
          <h1>Message Content</h1>
          <span id='messageContent'></span>
        </span>
        
      </div>
      
      <main> 
      <?php include 'index.php'; ?>
      </main>
        <div id="footer">
        </div>
  </div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="homepage_J.js"></script>
<!--<script type="text/javascript" src="homepage_A.js"></script>-->
 
</body>
</html>

