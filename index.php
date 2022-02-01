<head>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<header>
<?php
  require 'header.php';
?>

</header>

<script>
  setInterval(function(){
   $('.btn--next').trigger("click");
  },8500);
</script>

<div class="rest">
    <div class="photo-container">
    <div class="container-image img1 display">
      <div class="screen-index"></div>
      <video playsinline loop muted autoplay src="Videos/pro.mp4"></video>
    </div>
    <div class="container-image img2 no-display">
      <div class="screen-index"></div>
      <video playsinline loop muted autoplay src="Videos/tennis3.mp4"></video>
    </div>
    <div class="container-image img3 no-display">
      <div class="screen-index"></div>
      <video playsinline loop muted autoplay src="Videos/sparring.mp4"></video>
    </div>
    <div class="container-image img4 no-display">
      <div class="screen-index"></div>
      <video playsinline loop muted autoplay src="Videos/tennis1.mp4"></video>
    </div>
    <div class="container-image img5 no-display">
      <div class="screen-index"></div>
      <video playsinline loop muted autoplay src="Videos/tennis2.mp4"></video>
    </div>

    <div class="page-container">

      <!-- SLIDE 1 -->
      <div class="valeurs-container valeurs-container-1 display">
        <div class="valeurs-texte">
          <h2> Jouer avec un PRO </h2>
          <p> Progressez rapidement en jouant avec un de nos joueurs pros OTT ! Avec la formule OTT 1000 - TRAINING PRO, vivez le rêve de jouer avec l’un de nos joueurs pros étant ou ayant été sur le circuit ATP et WTA ! </p>
          <!-- <p> Progressez rapidement en jouant avec un de nos joueurs pros OTT ! Avec la formule OTT 1000 TRAINING PRO , vivez le rêve de jouer avec l’un de nos joueurs pros étant ou ayant été sur le circuit, profitez de leur expérience du plus haut niveau mondial. Alors, prêt à rentrer dans les coulisses de l’ATP et de la WTA  ?! </p> -->
        </div>

        <div class="flex-btn-accueil">
          <a href="jouer-pro.php" class="btn-link">
            <div class="button-container">
              <h2> Réserver </h2>
            </div>
          </a>

          <a href="equipe.php#pro-liste" class="btn-link">
            <div class="button-container-hollow">
              <h2> Voir les pros </h2>
            </div>
          </a>
        </div>
      </div>

      <!-- SLIDE 2 -->
      <div class="valeurs-container valeurs-container-2 no-display">
        <div class="valeurs-texte">
          <h2> Coaching individuel </h2>
          <!-- <p> Mettez toutes les chances de votre côté et optez pour des cours sur mesure avec un coaching individuel. 
            A Paris, tout au long de l’année, un entraînement individuel vous est proposé en fonction de vos disponibilités. 
            L’entraînement avec le coach de tennis professionnel est à la fois méthodique et rigoureux.
          </p> -->
          <p>Mettez toutes les chances de votre côté et optez pour des cours avec un coach de tennis professionnel.
            La formule OTT 500 - LEÇON COACH est disponnible à Paris tout au long de l’année et programmé en fonction de vos disponibilités.</p>

        </div>
        <div class="flex-btn-accueil">
          <a href="cours-individuels.php" class="btn-link">
            <div class="button-container">
              <h2> Réserver </h2>
            </div>
          </a>

          <a href="equipe.php#coach-liste" class="btn-link">
            <div class="button-container-hollow">
              <h2> Voir les coachs </h2>
            </div>
          </a>
        </div>
      </div>


      <!-- SLIDE 3 -->
      <div class="valeurs-container valeurs-container-3 no-display">
        <div class="valeurs-texte">
          <h2> Jouer avec un sparring </h2>
          <p> Progressez rapidement en jouant avec un de nos sparrings OTT tous classés entre 3/6 et Numéroté français ! 
            Jouez avec un véritable métronome , idéal pour se régler ou travailler un coup spécifique !
          </p>
        </div>
        <div class="flex-btn-accueil">
          <a href="cours-individuels.php" class="btn-link">
            <div class="button-container">
              <h2> Réserver </h2>
            </div>
          </a>

          <a href="equipe.php#sparring-liste" class="btn-link">
            <div class="button-container-hollow">
              <h2> Voir les sparrings </h2>
            </div>
          </a>
        </div>
      </div>

      <!-- SLIDE 4 -->
      <div class="valeurs-container valeurs-container-4 no-display">
        <div class="valeurs-texte">
          <h2> Stage de tennis </h2>
          <p> Vivez l’expérience O’TENNIS  TOUR cet été !
          Reservez votre stage en 2022 et rejoignez l’aventure.
          De 10 à 18 ans, quelque soit votre niveau, profitez durant les semaines de vacances d’un entraînement personnalisé et adapté afin de maximiser votre potentiel et d'atteindre vos objectifs .
          </p>
        </div>
        <a href="inscriptions.php" class="btn-link">
          <div class="button-container">
            <h2> Trouver mon stage </h2>
          </div>
        </a>
      </div>

      <!-- SLIDE 5 -->
      <div class="valeurs-container valeurs-container-5 no-display">
        <div class="valeurs-texte">
          <h2> Infrastructures </h2>
          <p> 
            Pour votre séjour de tennis, O’TENNIS TOUR vous accueille dans les CREPS (Centres de ressources, d'expertise et de performance sportive) de Toulouse, Boulouris Saint Raphaël , Poitiers ainsi que sur la base de loisirs d’Hostens (Landes Girondines). 
          </p>
        </div>
        <a href="inscriptions.php" class="btn-link">
          <div class="button-container">
            <h2> Trouver mon stage </h2>
          </div>
        </a>
      </div>
      
    
      <div class="pagination-wrapper">
        <svg class="button_accueil btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
          <path d="M0-.5h24v24H0z" fill="none"/>
        </svg>
        
        <div class="pagination-container">
          <h2> <span class='carrousel-number'>01 / 05</span> </h2>
        </div>
        
        <svg class="button_accueil btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
          <path d="M0-.25h24v24H0z" fill="none"/>
        </svg>
      </div>
    </div>
  </div>
</div>
<script src="JS/page-changer.js?v=<?php echo time(); ?>"></script>

</body>
</html>

<!-- <div class="valeurs-container valeurs-container-1 display">
        <div class="valeurs-texte">
          <h2> Stage de tennis </h2>
          <p> Vivez l’expérience O’TENNIS  TOUR cet été !
          Reservez votre stage en 2022 et rejoignez l’aventure.
          De 10 à 18 ans, quelque soit votre niveau, profitez durant les semaines de vacances d’un entraînement personnalisé et adapté afin de maximiser votre potentiel et d'atteindre vos objectifs .
          </p>
        </div>
        <a href="inscriptions.php" class="btn-link">
          <div class="button-container">
            <h2> Trouver mon stage </h2>
          </div>
        </a>
      </div> -->

      <!-- <div class="valeurs-container valeurs-container-2 no-display">
        <div class="valeurs-texte">
          <h2> Infrastructures </h2>
          <p> 
            Pour votre séjour de tennis, O’TENNIS TOUR vous accueille dans les CREPS (Centres de ressources, d'expertise et de performance sportive) de Toulouse, Boulouris Saint Raphaël , Poitiers ainsi que sur la base de loisirs d’Hostens (Landes Girondines). 
          </p>
        </div>
        <a href="inscriptions.php" class="btn-link">
          <div class="button-container">
            <h2> Trouver mon stage </h2>
          </div>
        </a>
      </div> -->