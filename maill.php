<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $sub = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $cell = filter_var($_POST['cellphone'], FILTER_SANITIZE_NUMBER_INT);
        $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        // Creating Array of Errors
        $formErrors = array();
        if (strlen($user) <= 3) {
            $formErrors[] = 'Username Must Be Larger Than <strong>3</strong> Characters';
        }
        if (strlen($msg) < 10) {
            $formErrors[] = 'Message Can\'t Be Less Than <strong>10</strong> Characters'; 
        }

        // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]

        $headers = 'Name : ' . $user . "\r\n". 'Subject : ' . $sub . "\r\n" . 'From: ' . $mail ."\r\n" . 'cell : ' . $cell . "\r\n\r";
        $myEmail = 'oussa.os.neg@gmail.com';
        $subject = 'Contact Form' ;
        $msg = $headers . $msg;


        if (empty($formErrors)) {
        
            mail($myEmail, $subject, $msg, $headers);
            
            $user = '';
            $mail = '';
            $cell = '';
            $msg = '';
                    
        }
        /*

        if (empty($formErrors)) {            
            require_once 'mailer/mail.php';
            $mail->setFrom($myEmail, $user);
            $mail->addAddress($myEmail);
            $mail->Subject = $subject;
            $mail->Body    = $msg;
            $mail->send();
            $user = '';
            $mail = '';
            $cell = '';
            $msg = '';
            setcookie("contact");
            header("Location: index.php", true);
        }
        */
    }
?>
<?php
