<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $sub = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $cell = filter_var($_POST['cellphone'], FILTER_SANITIZE_NUMBER_INT);
        $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        $headers = 'Subject : ' . $sub . '<br>' . 'From: ' . $mail .'<br>' . 'cell : ' . $cell . '<br>' . '<br>';
        $myEmail = 'oussa.os.neg@gmail.com';
        $subject = 'Contact Form';
        $msg = $headers . $msg;

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
    }
?>
