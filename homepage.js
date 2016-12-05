
/*global $*/
/*global location*/

window.onload =  function(){
  
  
    
  var filename= location.pathname.split('/').pop();  //checks to see which file call the javascript
  //alert(filename);
  
  
  
  
  // Switch case that will load appropriate function based on the file(homepage)
  switch(filename){
      case "index.php":
                console.log("HOME");
                break;
      case "inbox.php":
                console.log("INBOX");
                break;
      case "registration.php":
                console.log("REGIS");
                break;
      case "compose.php":
                compose();
                console.log("compose");
                
                break;
      default:
                console.log("ERROR " + filename );
                break;
  }
};



function homepage(){
        
    
    
    
} 




function compose(){
  
  document.getElementById('send_message_btn').addEventListener('click', function(){
   
  // get form inputs
  var recipients = document.forms['compose_message']['recipients'].value.split(',');
  var subject = document.forms['compose_message']['subject'].value;
  var body = document.forms['compose_message']['message_body'].value;
    
    
  console.log("sending :" + recipients[1] + "/ " +subject + "/ " + body);
  });
  
}





















// Polling for the sake of my intern tests
//var interval = setInterval(function() {
//    if(document.readyState === 'complete') {
//        clearInterval(interval);
//       done();
//    }    
//}, 100);