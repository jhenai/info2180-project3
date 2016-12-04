/*global $*/

$(document).ready(function(){
  
  $(window).on('hashchange', function(){
    var pageHash = window.location.hash.substring(1);
    console.log(pageHash);
    
    if( pageHash.length==0){
      pageHash = "index";
    }
    
    $('main').load(pageHash + ".php");
    
  });
  
  $("nav a").on('click', function(event){
    event.preventDefault();
    var page = $(this).attr("href");
   
    window.location.hash = formatForHash(page);
    
    
    $('main').load(page);
  });
  
   $(window).trigger('hashchange');
});


function formatForHash (page)
{
  var hash = page.split('.')
  return hash[0];
}




























/*
window.onload =  function(){
  
  
    
  var filename= location.pathname.split('/').pop();  //checks to see which file call the javascript
  //alert(filename);
  
  
  
  
  // Switch case that will load appropriate function based on the file(homepage)
  switch(filename){
      case "index.php":
                console.log("HOME")
                break;
      case "inbox.php":
                console.log("INBOX")
                break;
      case "registration.php":
                console.log("REGIS")
                break;
      case "compose.php":
                console.log("compose")
                break;
      default:
                console.log("ERROR " + filename )
                break;
  }
  
  




function homepage(){
        
    
    
    
} 
  
    
    
    
};

// Polling for the sake of my intern tests
//var interval = setInterval(function() {
//    if(document.readyState === 'complete') {
//        clearInterval(interval);
//       done();
//    }    
//}, 100);

*/