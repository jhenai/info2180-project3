//error style class; onblur; regex; sanitize

window.onload = function(){
       
    
       var regButton = document.getElementById('registerButton');
       regButton.onclick= function(){
        
       //get form inputs
       var firstname = document.forms['register']['firstname'];
       var lastname = document.forms['register']['lastname'];
       var username = document.forms['register']['username'];
       var password = document.forms['register']['password'];
       
       //get error mesage fields
       var firstname_err = document.getElementById('firstname_err');
       var lastname_err = document.getElementById('lastname_err');
       var username_err = document.getElementById('username _err');
       var password_err = document.getElementById('password_err');
       
       var passwordrequirement = "[a-zA-Z0-9]((?=[a-z])*(?=[A-Z])*(?=[0-9]))";
       
         if (firstname.value == ""){
               firstname_err.textContent = "First name is required.";
               return false;
               }
        
         if (lastname.value == ""){
               lastname_err.textContent = "Last name is required.";
               return false;

               }
         
          if (username.value == ""){
               username_err.textContent = "Username is required.";
               return false;

               }
         if (password.value == ""){
               password_err.textContent = "Password is required";
               return false;

               }
         
         if (password.value.match(passwordrequirement)){
             console.log("password correct");
         }
         else
        { 
            console.log('password incorrect');
            
        }
       
       
      };
};