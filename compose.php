<!DOCTYPE HTML>
<html>

<head> <title> Compose a message </title></head>
<body>
      
      <div id="content">
        
        <span id="page" style="visibility: hidden">COMPOSE</span>
        <h1>Compose Email</h1>
        <form id = "compose" style= "margin: auto;">
          
          <label for="subject">SUBJECT</label>
          <input type="text" name="subject" id="subject" required/></br></br>
          
          <label for="recipients">RECIPIENTS</label>
          <input type="text" name="recipients" id="recipients" required/></br>
          <p style = "text-align:center">ENTER RECIPIENTS USERNAME   ( please separate recipients by using <strong>,</strong> )</p>
          
          <label for="message_body">MESSAGE</label>
          <textarea name="message_body" rows="10" cols="30" id="message_body" > </textarea></br>
          
          <input type="button" value="SEND" class = "btn" id = "send_message_btn">
        </form>
        
        
        </div>
    
</body>
</html>
