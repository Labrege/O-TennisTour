<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/formules.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <a href="https://icons8.com/icon/X6CJMckcVrBj/1st-place-medal"></a>
    <title>O Tennis Tour | formules </title>
</head>
<body>
    <header>
      <?php
          require 'header.php'
      ?>
    </header>
    
    <!-- La Page Index.php -->
    <div class="rest">
    <div id="espace_membre_abonnement">

        <div class="titre-offres">
            <h1> Les <span class="titre-color">formules<span> </h1>
        </div>
        <!-- 
        <h4> Gestion de mon abonnement </h4>
        <ul>
            <li><a href="../espace-membre/abonnement/prise_abonnement.php"> Prendre un abonnement </a></li>
            <li><a href="../espace-membre/abonnement/.php"> Modifier mon moyen de paiement</a></li>
            <li><a href="../espace-membre/abonnement/.php"> Modifier mon abonnement</a></li>
            <li><a href="../espace-membre/abonnement/annulation_abonnement.php"> Annuler mon abonnement </a></li>
            <li><a href="../espace-membre/abonnement/.php"> Suprimer mon compte </a></li>
        </ul> 
        -->

        <div class="offre_abonement_global">
            <div class="level_plan" >
                <div class="plan_abonnement"><!-- abonement gratuit-->
                    <div class="titre-formule">
                        <h3>ATP 500</h3>
                        <img src="https://img.icons8.com/emoji/48/000000/3rd-place-medal-emoji.png"/>
                    </div>
                    
                    <div class="prix_par_mois">100€</div>
                        <div class="contenue_propose">
                            <ul class="liste_contenu_plan">
                                <li class="contenu_plan"><img src="Images/tick.png" alt=""> <p>court de tennis </p></li>
                                <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>activités multisport</p> </li>
                                <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>logement</p></li>
                            </ul>
                        </div>
                    
                    <div class="boite-bouton-valider">
                        <button type="button_gratuit" class="bouton_valider" name="button_gratuit">Choisir ce plan</a>
                    </div>
                </div>


                <div class="plan_abonnement"><!-- abonement prenium-->
                    <div class="titre-formule">
                        <h3>ATP 1000</h3>
                        <img src="https://img.icons8.com/emoji/48/000000/2nd-place-medal-emoji.png"/>
                    </div>
                    
                    
                        <div class="prix_par_mois">200€</div>
                        <div class="contenue_propose">
                            <ul class="liste_contenu_plan">
                                <li class="contenu_plan"><img src="Images/tick.png" alt=""> <p>court de tennis </p></li>
                                <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>activités multisport</p> </li>
                                <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>logement</p></li>
                            </ul>
                        </div>
                    
                    <div class="boite-bouton-valider">
                        <button type="button_prenium" class="bouton_valider" name="button_prenium">Choisir ce plan</a>
                    </div>
                </div>

                <div class="plan_abonnement">
                    <div class="titre-formule"><!-- abonement club-->
                        <h3>Grand Chelm</h3>
                        <img src="https://img.icons8.com/emoji/48/000000/1st-place-medal-emoji.png"/>
                    </div>
                    
                    
                        <div class="prix_par_mois">350€</div>
                        <div class="contenue_propose">
                            <ul class="liste_contenu_plan">
                                <li class="contenu_plan"><img src="Images/tick.png" alt=""> <p>court de tennis </p></li>
                                <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>activités multisport</p> </li>
                                <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>logement</p></li>
                            </ul>
                        </div>
                    
                    <div class="boite-bouton-valider">
                        <button type="button_club" class="bouton_valider" name="button_club">Choisir ce plan</a>
                    </div>
                </div>

            </div>
        </div>

        </div>

    </div>
    <script src="JS/script.js"></script>
</body>
</html>