<?php
require 'links.php';

if(isset($_GET['name']) && isset($_GET['surname'])){
    echo 'Merci '.$_GET['name'].' pour votre achat. Vous recevrez dans les 24 heures une confirmation de votre reservation, le lieu de la leçon.';
    ?>
    <a href="cours-individuels.php"> Retour à l'acceuil </a>
    <?php
}
?>
