window.onload = function(){
      

       var loginButton = document.getElementById('loginButton');
       loginButton.onclick= function(){
              
              var username = document.forms['login']['username'];
              var password = document.forms['login']['password'];
              var username_err = document.getElementById('usernameErr');
              var password_err = document.getElementById('passwordErr');
       
               if (username.value == ""){
                       username_err.textContent = "Username is required";
                       return false;

               }
                 if (password.value == ""){
                       password_err.textContent = "Password is required";
                       return false;

               }
               
           /*   $(function(){
                  $.ajax({
                      url="form_validation.php",
                      data= "username="  + username, 
                      dataType: 'json',
                      success: function(data){
                           var id = data[0];
                      }
                  })
                  
              }
              
              
              );
              */
                
             
             
               
              var httpRequest; 
              if (window.XMLHttpRequest) { // Mozilla, Safari, IE7+ ...
              httpRequest = new XMLHttpRequest();
               
           }
           httpRequest.onreadystatechange = function(){
             
               if (httpRequest.readyState === XMLHttpRequest.DONE) {
                   if (httpRequest.status === 200) {
                          
                   }
                   else{ alert ("CONNECTION ERROR");
                      
               }}
               
               var url = "https://project03-jhenai.c9users.io/form_validation.php?username=" + username;
               httpRequest.open('POST', url, true);
               httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
               httpRequest.send(null);
           }
           
           
          
       };
};