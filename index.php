<?php
  //session_start();
  include('session.php');
  
?>



<!DOCTYPE HTML>
<html>

<head>
  <title> Cheapo Mail </title>
  <link rel = "icon" href= "http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/Mail-icon.png"/>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="homepage.js"></script>
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
          <div>
            
          </div>
          
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="inbox.php">Inbox</a></li>
          <li><a href="registration.php">Registration</a></li>
          <li><a href="compose.php">Compose Message</a></li>
          <li><a href="logout.php">LogOut</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
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
        <h1>Welcome to CheapoMail Services. </h1>
        
        <h2>Recent Messages</h2>
        <p></p>
        <table style="width:100%; border-spacing:0;" id="recent message">
          <tr><th>Item</th><th>Description</th></tr>
          <tr><td>Item 1</td><td>Description of Item 1</td></tr>
          <tr><td>Item 2</td><td>Description of Item 2</td></tr>
          <tr><td>Item 3</td><td>Description of Item 3</td></tr>
          <tr><td>Item 4</td><td>Description of Item 4</td></tr>
        </table>
        
      </div>
    </div>
    <div id="footer">
      </div>
  </div>
</body>
</html>

