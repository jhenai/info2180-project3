
<!DOCTYPE HTML>
<html>

<head>
  <title> Cheapo Mail </title>
  <link rel = "icon" hb ref= "http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/Mail-icon.png"/>
  <link rel = "icon" hb ref= "http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/256/Mail-icon.png"/>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <script src="login.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="homepage/style/style.css" />

  
  
  
  
   
    <!-- style for tabular form -->
                                     <style>
                                              body {font-family: "Lato", sans-serif;}
                                              
                                              ul.tab {
                                                  list-style-type: none;
                                                  margin: 0;
                                                  padding: 0;
                                                  overflow: hidden;
                                                  border: 1px solid #ccc;
                                                  background-color: #f1f1f1;
                                              }
                                              
                                              /* Float the list items side by side */
                                              ul.tab li {float: left;}
                                              
                                              /* Style the links inside the list items */
                                              ul.tab li a {
                                                  display: inline-block;
                                                  color: black;
                                                  text-align: center;
                                                  padding: 14px 16px;
                                                  text-decoration: none;
                                                  transition: 0.3s;
                                                  font-size: 17px;
                                              }
                                              
                                              /* Change background color of links on hover */
                                              ul.tab li a:hover {
                                                  background-color: #ddd;
                                              }
                                              
                                              /* Create an active/current tablink class */
                                              ul.tab li a:focus, .active {
                                                  background-color: #ccc;
                                              }
                                              
                                              /* Style the tab content */
                                              .tabcontent {
                                                  display: none;
                                                  padding: 6px 12px;
                                                  border: 1px solid #ccc;
                                                  border-top: none;
                                              }
                                              
                                              .topright {
                                               float: right;
                                               cursor: pointer;
                                               font-size: 20px;
                                              }
                                              
                                              .topright:hover {color: red;}
                                      </style>
        
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
         
          <li><a href="index.php">Home</a></li>
          <li><a href="inbox.php">Inbox</a></li>
          <li><a href="registration.php">Registration</a></li>
          <li><a href="compose.php">Compose Message</a></li>
          <li class="selected" ><a href="login.php">Login</a></li>
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
                                 <!-- tabular format -->
                                                               <ul class="tab">
                                                                <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">User</a></li>
                                                                <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Administrator</a></li>
                                                                
                                                              </ul>
                                                              
                                                              <div id="London" class="tabcontent">
                                                                <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
                                                                <h3>User Login</h3>
                                                                
        <p><form action="form_validation.php" name="login"  method= "get">
                          <div class="container">
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" required>
                            <div id=usernameErr></div>
                        
                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" required>
                            <div id=passwordErr></div>
                        
                            <button type="submit" id= "loginButton" name= "loginButton">Login</button>
                           
                          </div>
                        
                         
                        
                    </form>
                    
                    </p>
            </div>
            
            <div id="Paris" class="tabcontent">
              <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
              <h3>Administrator Login</h3>
              <p><form action="form_validation.php" name="login"  method= "get">
                       
                        
                        
                          <div class="container">
                            <label><b>Username</b></label>
                            <input type="text" value = "Administrator" name="username" required>
                            <div id=usernameErr></div>
                        
                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" required>
                            <div id=passwordErr></div>
                        
                            <button type="submit" id= "loginButton" name= "loginButton">Login</button>
                           
                          </div>
                        
                         
                        
                    </form>
                    
                    </p>
            </div>
            
            
        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
        </div>
        </div>
    </div>
    <div id="footer">
      </div>
  </div>
</body>
</html>
