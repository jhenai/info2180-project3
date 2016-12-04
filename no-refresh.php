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
          <li><a id="nav-registration" href="registration.php">Registration</a></li>
          <li><a id="nav-compose" href="compose.php">Compose Message</a></li>
          <li><a id="nav-logout"href="login.php">LogOut</a></li>
        </ul>
      </nav>
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
           </p>
        </form>
        
      </div>
      
      <main> 
      
      
      <?php include 'index.php'; ?>
      
      
      
      </main>
      
        <div id="footer">
             <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    
      </div>
  </div>
</body>
</html>