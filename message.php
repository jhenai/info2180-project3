<?php

include('config.php');

session_start();

$request = $_POST['task'];
$username = $_SESSION['login_user'];
$userid = $_SESSION['user_id'];
$page = $_POST['page'];
$x=1;

// echo "Hello  ";
// echo "About to: $request ";
// echo "  $usernane / $userid ";



switch($request){
    
    case 'send':
            echo "Initiating: $request  from $userid to :";
            $now = date("Y-m-d H:i:s");
            $subject = $_POST['subj'];
            $body =  $_POST['body'];
            $recipients = json_decode($_POST['to']);
            
            echo "  $subject / $recipients / $body / $now/ ";
            
            $stmt = $conn->prepare(" insert into message (recipient_id,user_id,subject,body,date_sent) values (?,?,?,?,?)");
            $stmt->bind_param("iisss",$rId,$uId,$sub,$message_body,$date);
            
            foreach($recipients as $rec){
                
                $recID = getID($conn,$rec);
                
                echo "recipient : " + $rec;
                
                $uId = $userid;
                $rId = $recID;
                $sub = $subject;
                $message_body = $body;
                $date = $now;
                
               if($stmt->execute()){
                    echo true;
                }else{
                    $error = $mysqli->error;
                    echo mysqli_error($conn);
                }
            }
            break;
            
    case "showmessage":
            $query = "SELECT message.id, user.firstname,user.lastname,user.username,message.subject,message.body,message.date_sent FROM message JOIN user ON message.user_id = user.id where recipient_id = '".$userid."' ORDER BY date_sent DESC";
            $stmt = mysqli_query($conn,$query);
           
            if(mysqli_num_rows($stmt) >= 1){
                echo $user_id;
                echo '<table class="table table-striped table-bordered table-hover">'; 
                echo "<tr><th>ID</th><th>FROM </th><th>SUBJECT</th><th>DATE</th></tr>"; 
                
                
                
                while($row = mysqli_fetch_array($stmt))
                { 
                   if(checkRead($row['id'],$userid,$conn)){$bold ="";}else {$bold = "style='font-weight:bold'";}  
                   echo"<tr ".$bold." ><td> <a id='mid' name='".$row['id']."'>";
                   echo $row['id'];
                   echo"</a></td><td>";
                   echo $row['firstname']." ";
                   echo $row['lastname'];
                   echo"( ";
                   echo $row['username'];
                   echo" )</td><td>";
                   echo $row['subject'];
                   echo"</td><td>";
                   echo substr($row['date_sent'], 0,10);
                   echo"</td><td style='display:none;'>";
                   echo $row['body'];
                   echo"</td></tr>";
                   
                   if($x > 9) {
                        if($page=="INDEX"){
                            $x=1;
                            return true; };
                    } 
                   $x++;
                }
             echo "</table>";  
            }else{
                    $result = $userid;
                    echo " NO MESAGGES FOR <strong> $username </strong>  " ;
            }
        break;
            
            
    case "read"://marks message as being read;
        
        $mId = $_POST['messageId'];
        $now = date("Y-m-d H:i:s");
        
        $stmt = $conn->prepare(" INSERT INTO message_read (message_id, reader_id, read_date) VALUES(?,?,?)");
        $stmt->bind_param("iis",$msgId,$uId,$date);
        
        $msgId=$mId;   
        $uId=$userid;
        $date=$now;
        
            if($stmt->execute()){
                    echo true;
                }else{
                    $error = $mysqli->error;
                    echo mysqli_error($conn);
                }    
       break;

    
}//end of switch;




function checkRead($mid,$rid,$con){ //checks to see if the message was read by the recipiend returns false if not read

        // "select message_read.id from message_read JOIN message ON message.id = message_read.message_id where recipient.";
        $query = "SELECT message_id from message_read where reader_id = '".$rid."' AND message_id = '".$mid."'";
        $stmt = mysqli_query($con,$query);
       
        if($stmt->num_rows == 0){
            return false;  
        }else{
            
            return true;
        }
        
}









function getID($con, $uname){
        $uname=test_input($uname,true);
        $state = mysqli_query($con,"SELECT id FROM user WHERE username = '$uname'");
        if($state !== false){
            $i = $row = mysqli_fetch_assoc($state);
            return $i['id'];
        }else{
            return 0;
        }
    }
    
    
function test_input($data,$all){
        if($all){
            $data = trim($data);
        }else{
            $data = trim($data,"\0\x0B\r ");
        }
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }




?>