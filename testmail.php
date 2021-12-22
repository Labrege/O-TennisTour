<?php
ini_set( 'display_errors', 1);
errot_reporting( E_ALL );
$from = "contact@otennistour.com";
$to ="solalpont@gmail.com";
$subject = "Vérification PHP Mail";
$message = "PHP mail marche";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "L'email a été envoyé.";
?>