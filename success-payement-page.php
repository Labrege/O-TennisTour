<?php
require 'links.php';
require 'includes/dbh.inc.php';

$nom = $_GET['surname'];
$prénom = $_GET['name'];
$mail = $_GET['mail'];
$téléphone = $_GET['tel'];
$condition = $_GET['condition'];
$surface = $_GET['surface'];
$age = $_GET['age'];
$localisation1 = $_GET['localisation1'];
$localisation2 = $_GET['localisation2'];
$prof = $_GET['prof'];
$heure = $_GET['time'];
$dateGet = $_GET['date'];
$date = date('d M Y', strtotime($dateGet));
$amount = $_GET['amount'];
?>
<div class="success-container">
    <div class="success-container-image-container">
        <img src="Images/logoheader-3.png" alt="">
    </div>
    <div class="success-text-container">
        <h1> Réservation réussie ! </h1>
        <div class="red-line"></div>
        <p> Merci <span class="get_info"><?php echo $_GET['name'];?></span> pour votre réservation. <br> Vous recevrez dans les prochaines 24 heures un mail contenant les informations relatives à votre réservation.<br><br> Voici le détail de votre commande : </p>
        <br>
        <li>Séance de 60 minutes avec votre <?php echo $_GET['statutprof'];?>, <?php echo $_GET['prof'];?>.</li>
        <li>Réservation d'un court le <?php echo $date;?> à <?php echo $_GET['time'];?>.</li>
        <li>Total payé : <?php echo number_format(($_GET['amount'] /100), 2, '.', ' ');?> €</li>
    </div>
    <a href="cours-individuels.php" class='button'> Retour à l'acceuil </a>
</div>