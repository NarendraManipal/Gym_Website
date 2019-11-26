<?php
    $success = "";

    if(isset($_POST['msg-submit']))
    {
        $name = htmlspecialchars($_POST['sender-name']);
        $mail = htmlspecialchars($_POST['sender-mail']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message-body']);

        $headers = "From: " . strip_tags($_POST['sender-mail']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['sender-mail']) . "\r\n";
        $headers .= "CC: cse.parallax@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        //message body construction
        $hsubject = $name.": ".$subject;
        $bname = "<h4>Name:  </h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$name;
        $bmail = "<h4>Email:  </h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$mail;
        $bmessage = "<h4>Query:  </h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$message;


        $body = "<br>".$bname." ".$bmail."<br>".$bmessage;
        
        
        if(mail('cse.parallax@gmail.com', $hsubject, $body, $headers))
        {
            $success = "Success";
        }
        else
        {
            $success = "Failed";
        }
    }

?>