<?php
   include('session.php');

?>

<!DOCTYPE HTML>
<html>

<head>
  <title> Cheapo Mail </title>
  <link rel = "icon" hb ref= "http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/Mail-icon.png"/>
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
          </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="inbox.php">Inbox</a></li>
          <li><a href="registration.php">Registration</a></li>
          <li class="selected"><a href="compose.php">Compose Message</a></li>
          <li><a href="logout.php">LogOut</a></li>
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
        <h1>Compose Email</h1>
        
        <form id = "compose_message" style= "margin: auto;" method=  >
          
          <label for="subject">SUBJECT</label>
          <input type="text" name="subject" id='subject' required/></br><br/>
          
          <label for="recipients">RECIPIENTS</label>
          <input type="text" name="recipients" id='recipients' required/>
          <span id='tip'>Please separate multiple recipients using a comma(,)</span><br/><br/>
          <div id = "rec_error"></div>
          
          <label for="message_body" required>MESSAGE</label>
          <textarea name="message_body" rows="10" cols="30" id='message_body'  > </textarea></br>
          
          <input type="submit" value="Submit" class = "btn" id = "send_message_btn">
        </form>
        
        
        </div>
    </div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
</body>
</html>
