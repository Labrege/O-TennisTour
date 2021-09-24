<header>
  <?php
      require 'header.php'
  ?>
</header>

<div class="rest">
    <div class="photo-container">
    <div class="container-image img1 display">
      <div class="screen-index"></div>
      <video playsinline loop muted autoplay src="Videos/tennis1.mp4"></video>
    </div>
    <div class="container-image img2 no-display">
      <div class="screen-index"></div>
      <video playsinline loop muted autoplay src="Videos/tennis2.mp4"></video>
    </div>
    <div class="container-image img3 no-display">
      <div class="screen-index"></div>
      <video playsinline loop muted autoplay src="Videos/tennis3.mp4"></video>
    </div>

    <div class="page-container">
      <div class="valeurs-container valeurs-container-1 display">
        <div class="valeurs-texte">
          <h2> Stage de tennis </h2>
          <p> Vivez l’expérience O’TENNIS  TOUR cet été !
          Reservez votre stage en 2021 et rejoignez l’aventure.
          De 10 à 18ans, quelque soit votre niveau, profitez durant les semaines de vacances d’un entraînement personnalisé et adapté afin de  maximiser votre potentiel et atteindre vos objectifs .
          </p>
        </div>
        <a href="inscriptions.php" class="btn-link">
          <div class="button-container">
            <h2> Trouver mon stage </h2>
          </div>
        </a>
      </div>
      <div class="valeurs-container valeurs-container-2 no-display">
        <div class="valeurs-texte">
          <h2> Infrastructures </h2>
          <p> 
            O’TENNIS TOUR vous accueille sur les CREPS (Centres de ressources, d'expertise et de performance sportive) de Toulouse, Boulouris Saint Raphaël , Poitiers ainsi que sur la base de loisirs d’Hostens(Landes Girondines) pour votre séjour tennis. 
          </p>
        </div>
        <a href="inscriptions.php" class="btn-link">
          <div class="button-container">
            <h2> Trouver mon stage </h2>
          </div>
        </a>
      </div>
      <div class="valeurs-container valeurs-container-3 no-display">
        <div class="valeurs-texte">
          <h2> Coaching Individuel</h2>
          <p> Ne laissez rien au hasard. Mettez toutes les chances de votre côté et optez pour des cours sur mesure avec le coaching individuel tout au long de l’année à Paris.
            Planifié selon vos disponibilités.L’entraînement avec le coach de tennis professionnel est à la fois méthodique et rigoureux.
          </p>
        </div>
          <a href="cours-individuels.php" class="btn-link">
            <div class="button-container">
              <h2> Trouver ma leçon </h2>
            </div>
          </a>
      </div>
      
    
      <div class="pagination-wrapper">
        <svg class="button_accueil btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
          <path d="M0-.5h24v24H0z" fill="none"/>
        </svg>
        
        <div class="pagination-container">
          <h2> <span class='carrousel-number'>01 / 03</span> </h2>
        </div>
        
        <svg class="button_accueil btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
          <path d="M0-.25h24v24H0z" fill="none"/>
        </svg>
      </div>
    </div>
  </div>
</div>
<script src="JS/index3.js?v=<?php echo time(); ?>"></script>

</body>
</html>