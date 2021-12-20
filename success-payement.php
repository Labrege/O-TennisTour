<?php
require 'links.php';
require 'includes/dbh.inc.php';
require 'functions.php';

if(isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['mail']) && isset($_GET['tel']) && isset($_GET['condition']) && isset($_GET['surface']) && isset($_GET['age'])){
    $nom = $_GET['surname'];
    $prénom = $_GET['name'];
    $email = $_GET['mail'];
    $téléphone = $_GET['tel'];
    $condition = $_GET['condition'];
    $surface = $_GET['surface'];
    $age = $_GET['age'];
    $localisation1 = $_GET['localisation1'];
    $localisation2 = $_GET['localisation2'];
    $prof = $_GET['prof'];
    $statutprof = $_GET['statutprof'];
    $heure = $_GET['time'];
    $dateGet = $_GET['date'];
    $date = date("Y/m/d", strtotime($dateGet));
    $amount = $_GET['amount'];
    $profEmail = $_GET['profEmail'];
    $unix_time = time();
    $idReservation = $nom.$unix_time;

    // Time //
    $oneHourLess = date('H:i', strtotime($heure.'-1 hour'));
    $oneHourMore = date('H:i', strtotime($heure.'+1 hour'));

    // SQL //
    $sql = "INSERT INTO réservations (nom, prénom, mail, téléphone, CourtCondition, surface, age, localisation1, localisation2, prof, heure, dateRésa, amount, idReservation) VALUES ('$nom', '$prénom','$email', '$téléphone', '$condition', '$surface','$age', '$localisation1', '$localisation2','$prof','$heure','$date', '$amount','$idReservation')";
    $conn->query($sql);

    $sqlChange = "UPDATE disposindivs SET coursReserve = '1' WHERE profDispo='$prof' AND heureDispo='$heure' AND dateDispo='$date'";
    $conn->query($sqlChange);

    $sqlModifyHours = "UPDATE disposindivs SET coursReserve = '2' WHERE profDispo='$prof' AND (heureDispo='$oneHourLess' OR heureDispo='$oneHourMore') AND dateDispo='$date'";
    $conn->query($sqlModifyHours);

    // Mail //
    if($sql && $sqlChange && $sqlModifyHours){
        //Expéditeur
        $mailFrom = 'contact@otennistour.com';
        $fromName = "O'TENNIS TOUR";

        //Mail Responsable
        $mailText = "Bonjour ! <br><br> Votre nouvelle réservation OTT à bien été enregistrée ! <br><br> Voici ci-dessous le détail de votre commande :  <ul><li> Pour $prénom $nom</li> <li> Le $date à $heure</li> <li> Avec $prof </li> <li> Localisation 1: $localisation1 </li> <li> Localisation 2: $localisation2 </li> <li> Votre numéro de commande : $idReservation </li></ul> <br><br> Lorsque votre commande sera validée par notre équipe, vous recevrez un nouveau mail ou SMS avec toutes les informations relatives à votre réservation. <br><br>
        Sportivement ! 
        <br><br>
        L’équipe O'Tennis Tour ";
        $mailSubjectProf = "Nouvelle réservation OTT pour $prof";
        $successUrl = "success-payement-page.php?amount=$amount&name=$prénom&surname=$nom&tel=$téléphone&mail=$email&condition=$condition&surface=$surface&age=$age&localisation1=$localisation1&localisation2=$localisation2&prof=$prof&statutprof=$statutprof&time=$heure&date=$date&idCommande=$idReservation";
        $failUrl = 'index.php?error=failedemail';
        SendEmail($mailFrom, $fromName, $email, $mailText, $mailSubjectProf, $successUrl, $failUrl);

    }

}else{
    header('Location: cours-individuels.php');
}
?>
