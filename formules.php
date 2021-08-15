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
    <div id="espace_membre_abonnement">
        <img class="background" src="Images/tennis.jpg" alt="">
        <div class="titre-offres">
            <h1> Les <span class="titre-color">formules<span> </h1>
        </div>
        <div class="container container-formules">
            <img src="" alt="">
            <div class="card">
                <div class="image-card">
                    <img src="Images/image-tennis.png" alt="">
                </div>
                <div class="titre-formule">
                    <h2>ATP 500</h2>
                </div>
                <div class="date-container">
                    <h3 class="date"> du 17/06 au 22/06 </h3>
                    <h3 class="prix"> 400€ </h3>
                </div>
                    
                <div class="contenue_propose">
                    <ul class="liste_contenu_plan">
                        <li class="contenu_plan"><img src="Images/tick.png" alt=""> <p>2 sessions de tennis par jour </p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>3h d'activité physique par jour </p> </li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Rapport individuel</p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Pension complète</p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Transport (train/mini-bus)</p></li>

                    </ul>
                </div>
                
                <div class="boite-bouton-valider">
                    <button type="button_gratuit" class="bouton_valider" name="button_gratuit">Choisir ce plan</a>
                </div>  
            </div>

            <div class="card">
                <div class="image-card">
                    <img src="Images/tennis-card-2.jpeg" alt="">
                </div>
                <div class="titre-formule">
                    <h2>ATP 1000</h2>
                </div>
                <div class="date-container">
                    <h3 class="date"> du 17/06 au 22/06 </h3>
                    <h3 class="prix"> 600€ </h3>
                </div>
                    
                <div class="contenue_propose">
                    <ul class="liste_contenu_plan">
                        <li class="contenu_plan"><img src="Images/tick.png" alt=""> <p>2 sessions de tennis par jour </p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>3h d'activité physique par jour </p> </li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Rapport individuel</p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Pension complète</p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Transport (train/mini-bus)</p></li>

                    </ul>
                </div>
                
                <div class="boite-bouton-valider">
                    <button type="button_gratuit" class="bouton_valider" name="button_gratuit">Choisir ce plan</a>
                </div>  
            </div>

            <div class="card">
                <div class="image-card">
                    <img src="Images/tennis-card-1.jpeg" alt="">
                </div>
                <div class="titre-formule">
                    <h2>GRAND CHELEM </h2>
                </div>
                <div class="date-container">
                    <h3 class="date"> du 17/06 au 22/06 </h3>
                    <h3 class="prix"> 800€ </h3>
                </div>
                    
                <div class="contenue_propose">
                    <ul class="liste_contenu_plan">
                        <li class="contenu_plan"><img src="Images/tick.png" alt=""> <p>2 sessions de tennis par jour </p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>3h d'activité physique par jour </p> </li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Rapport individuel</p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Pension complète</p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Transport (train/mini-bus)</p></li>

                    </ul>
                </div>
                
                <div class="boite-bouton-valider">
                    <button type="button_gratuit" class="bouton_valider" name="button_gratuit">Choisir ce plan</a>
                </div>  
            </div>
        </div>
    
<script type="text/javascript" src="JS/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"),{
            max:25,
            speed:400,
            //glare: true,
            //"max-glare":1,
        });
    </script>
    <script src="JS/script.js"></script>
</body>
</html>