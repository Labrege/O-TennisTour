<?php
if(!isset($_SESSION)){
    session_start();
}
/* For website*/
// $_SESSION['includes'] = "/includes/dbh.inc.php";
// $_SESSION['vendor'] = "/vendor/autoload.php";
// $_SESSION['abonnementPrefix'] ="";
// $_SESSION['ovalXV'] ="";


/* For localhost*/
$_SESSION['includes'] = "/O-TennisTour/includes/dbh.inc.php";
$_SESSION['vendor'] = "/O-TennisTour/vendor/autoload.php";
$_SESSION['abonnementPrefix'] ="..";
$_SESSION['ovalXV'] ="/O-TennisTour";

require_once($_SERVER['DOCUMENT_ROOT'] . $_SESSION['includes']);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <!-- <meta http-equiv="refresh" content="900;url=../includes/logout.inc.php" /> -->
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-filtre.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-favoris.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-entrainement.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="<?php echo $_SESSION['ovalXV'];?>/CSS/membre/espacemembre-entrainement.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-informations.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-abonnement.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-paiements.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-annulerabonnement.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/espacemembre-profs.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="Text/css" href="../CSS/membre/modal.css?v=<?php echo time(); ?>">


    <!-- JavaScript file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script scr='../espace-membre-js/sidebar.js'></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Pickaday -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
    <title> O'Tennis Tour | Espace Membre</title>
</head>
<body>