<?php
    $success = "";

    if(isset($_POST['msg-submit']))
    {
        $contact_name = htmlspecialchars($_POST['sender-name']);
        $contact_mail = htmlspecialchars($_POST['sender-mail']);
        $contact_subject = htmlspecialchars($_POST['subject']);
        $contact_message = htmlspecialchars($_POST['message-body']);

        require 'phpmailer\PHPMailerAutoload.php';
        require 'config\credentials.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom(EMAIL, 'Stone Gym: '.$contact_name);
        $mail->addAddress(EMAIL);              // Name is optional
        $mail->addReplyTo(EMAIL);
         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $contact_name.': '.$contact_subject;
        $mail->Body = '<b>Name: </b>'.$contact_name.'<br><br><b>Email: </b>'.$contact_mail.'<br><br><b>Message: </b><br>'.$contact_message;

        if(!$mail->send()) {
            $success = "Failure";
        } else {
            $success = "Success";
        }
    }

?>