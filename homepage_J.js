/*global $*/
var current_page ;
var polling;

$(document).ready(function(){
  
  $(window).on('hashchange', function(){
    var pageHash = window.location.hash.substring(1);
    console.log("page hash: "+pageHash);
    
    if( pageHash.length==0){
      pageHash = "index";
    }
    
    $('main').load(pageHash + ".php", pageFunctions );
  });  
  
  $("nav a").on('click', function(event){
    event.preventDefault();
    var page = $(this).attr("href");
    console.log("Loading " + page);
    window.location.hash = formatForHash(page);
    
    $('main').load(page, pageFunctions);
    
  });


  
  $(window).trigger('hashchange',pageFunctions);
  

});




function pageFunctions() {
   current_page =  $("#page").text();   //checks to see which file calls the javascript
   $('#LOGOUT').on('click',function(event) {
       window.location = "https://project03-jhenai.c9users.io/mail_login.php";
   });
  
  // Switch case that will load appropriate function based on the file(homepage)
  switch(current_page){
      case "INDEX":
                $('#messageArea').attr('style', " ");
                clearInterval(polling);
                polling = setInterval(loadmeassages, 1000);
                console.log("HOME loaded");
                break;
      case "INBOX":
                $('#messageArea').attr('style', " ");
                clearInterval(polling);
                polling = setInterval(loadmeassages, 1000);
                console.log("INBOX loaded");
                break;
      case "REGISTRATION":
                clearInterval(polling);
                $('#messageArea').attr('style', "visibility: hidden");
                console.log("REGIS loaded");
                break;
      case "COMPOSE":
                clearInterval(polling);
                $('#messageArea').attr('style', "visibility: hidden");
                compose();
                console.log("compose loaded");
                break;
      case "LOGOUT":
                $('#messageArea').attr('style', "visibility: hidden");
                console.log("LOGOUT loaded");
                break;
      default:
                console.log("ERROR IN :" + current_page );
                break;
  }
}



function loadmeassages(){
  
  $.post('message.php',{task:'showmessage',page:current_page},function(result) {
    $('#result').html(result);
    
    $('tr').each(function() {
        $(this).click(function() {
          var selectedTd = $(this).children('td:nth-child(5)').text();
          var messageID = $(this).children('td:nth-child(1)').text();
           
          $(this).attr('style','');
            
           readMessage(messageID);
           $('#messageContent').text(selectedTd);
          
        });
    });
    
  });
  
}


function readMessage(mid){
  
  console.log("reading message " + mid);
  
  $.post('message.php',{task:'read',page:current_page,messageId:mid},function(result) {
      $('#error').text(result);
      
      console.log("message read "+ result + mid );
      
  });
  
}


function compose(){
  
  document.getElementById('send_message_btn').addEventListener('click', function(){
   
  var recipients = $('#recipients').val().split(',');
  var subject = $('#subject').val();
  var body = $('#message_body').val();
    
  console.log("sending :" + recipients + "/ " +subject + "/ " + body);
           
      $.post('message.php',{task:'send',to:JSON.stringify(recipients),subj:subject,body:body},function(result){
            $('#recipients').val('');
            $('#subject').val('');
            $('#message_body').val('');
            //console.log("POST sent : "+ recipients + "/ " +subject + "/ " + body + " / RESULTS : " + result + " / ");
      });
            
            
    
  
  
  });
  
}

function formatForHash (page)
{
  var hash = page.split('.');
  return hash[0];
}


$('#nav-inbox').click(function(){
  //alert(this.parentElement);
});


















// Polling 
//var interval = setInterval(function() {
//    if(document.readyState === 'complete') {
//        clearInterval(interval);
//       done();
//    }    
//}, 100);

