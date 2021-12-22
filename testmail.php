<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.hostinger.fr';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'contact@otennistour.com';
$mail->Password = 'Ott75016';
$mail->setFrom('contact@otennistour.com', 'Votre nom');
$mail->addReplyTo('contact@otennistour.fr', 'Votre nom');
$mail->addAddress('solalpont@gmail.com', 'Nom du destinataire');
$mail->Subject = 'Essai de PHPMailer';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = 'Ceci est le contenu du message en texte clair';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Erreur de Mailer : ' . $mail->ErrorInfo;
} else {
    echo 'Le message a été envoyé.';
}
?>