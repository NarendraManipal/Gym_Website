<?php
    if(isset($_POST['forgot-btn']))
    {
        require 'phpmailer\PHPMailerAutoload.php';
        require 'config\credentials.php';

        $forgot_mail = $_POST['forgot-mail'];
        $forgot_pass = $_POST['forgot-password'];
        $forgot_phoneno = $_POST['forgot-phoneno'];

        $forgot_query_check = "SELECT * FROM users WHERE email=? and phoneno=? LIMIT 1";
        $stmt = $conn->prepare($forgot_query_check);
        $stmt->bind_param('ss', $forgot_mail, $forgot_phoneno);
        $stmt->execute();
        $result = $stmt->get_result();
        $userCount = $result->num_rows;
        $stmt->close();

        if($userCount == 0)
        {
            $message = "Credentials doesn't match!!";
			echo "<script type='text/javascript'>
				alert('$message');
            </script>";
            
            header("Location: index.php");

            $mail = new PHPMailer;

            //$mail->SMTPDebug = 4;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = EMAIL;                 // SMTP username
            $mail->Password = PASS;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom(EMAIL, 'Stone Gym');
            $mail->addAddress($_POST['forgot-mail']);              // Name is optional
            $mail->addReplyTo($_POST['forgot-mail']);
            // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Alert!!!!!!!!!';
            $mail->Body    = 'Unauthorized access to user stone account!!!';
            $mail->send();
        }
        else
        {
            $forgot_pass = password_hash($forgot_pass, PASSWORD_DEFAULT);
            $forgot_query = "UPDATE users SET password=? WHERE email=?";
            $stmt = $conn->prepare($forgot_query);
            $stmt->bind_param('ss', $forgot_pass, $forgot_mail);
            if($stmt->execute())
            {
                header("Location: index.php");

                $mail = new PHPMailer;

                //$mail->SMTPDebug = 4;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = EMAIL;                 // SMTP username
                $mail->Password = PASS;                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                $mail->setFrom(EMAIL, 'Stone Gym');
                $mail->addAddress($forgot_mail);              // Name is optional
                $mail->addReplyTo($forgot_mail);
                // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'Password Reset Successful';
                $mail->Body = 'Your password has been reset successfully!!! <br><br> New Password: '.$_POST['forgot-password'];
                $mail->send();
            }    
            $stmt->close();
        }
    }
?>