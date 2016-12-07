
function validateForm(){
    
              var username = document.forms['login']['username'].value;
              var password = document.forms['login']['password'].value;
              var username_err = document.getElementById('usernameErr');
              var password_err = document.getElementById('passwordErr');
               
              if (username == ""){
                       username_err.textContent = "Username is required";
                       return false;
              }
              
              if (password == ""){
                       password_err.textContent = "Password is required";
                       return false;
                  
              }
              
              
              
              
}