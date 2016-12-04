<!DOCTYPE HTML>
<html>

<head> 
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="login.js" type="text/javascript"></script>
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
                                                                
        <p><form action="form_validation.php" name="login"  method= "post">
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
  
</body>
</html>
