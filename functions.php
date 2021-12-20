<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

function SendEmail($mailFrom, $fromName, $recipients, $mailText, $mailSubject, $successUrl, $failUrl){
    // echo $mailFrom;
    // echo '<br>';
    // echo $fromName;
    // echo '<br>';
    // echo $recipients;
    // echo '<br>';
    // echo $mailText;
    // echo '<br>';
    // echo $mailSubject;
    // echo '<br>';
    // echo $successUrl;
    // echo '<br>';
    // echo $failUrl;
    
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = false;                   // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'contact.otennistour@gmail.com';                     // SMTP username
        $mail->Password   = 'Ott75016';                               // SMTP password
        $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($mailFrom, $fromName);
        $mail->addAddress('contact@otennistour.com');
        $mail->addBCC($recipients);
            // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $mailSubject;
        $mail->Body    = $mailText;
        $mail->AltBody = strip_tags($mailText);

        if ($mail->send()){
            echo"<script language='javascript'>
                window.location = '$successUrl';
                window.location = newLocation;
            </script>
            ";
        }
        else{
            echo"<script language='javascript'>
            window.location = '$failUrl';
                window.location = newLocation;
            </script>
            ";
        }
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {
        $mail->ErrorInfo
    }";
    }
    exit();
}
?>