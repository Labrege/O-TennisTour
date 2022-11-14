<?php
  require 'links.php';
  require 'includes/dbh.inc.php';
?>

<script>
  $(document).ready(function(){
    $('.clickable-link').click(function(){
      $(this).next().toggle(300, 'swing');
      $(this).children().toggleClass('selected');
    });
  });
</script>

<div class="header-logo">
          <a href="index.php"><img class= "logo_club" src="Images/logoheader-3.png" alt="logo-test"></a>
          <a href="index.php"><img class= "logo_nom" src="Images/titre-header.png" alt="logo-test"></a>
          <div class="hamburger-menu">
              <div class="ligne ligne-1"></div>
              <div class="ligne ligne-2"></div>
              <div class="ligne ligne-3"></div>
          </div>
      </div> 
      <nav class="navbar">
          <ul id="myDIV" class="nav-list">

              <li class="nav-item">
                <a href="index.php" class="nav-link btn"> Accueil </a>
              </li>

              <li class="nav-item">
                <div class="clickable-link">
                  <span class="nav-link"> Stages </span>
                </div>
                <div class="hidden-link" style='display: none'>
                  <a href="stages.php"> Nos formules </a>
                  <a href="inscriptions.php"> Réserver un stage </a>
                </div>
              </li>

              <li class="nav-item">
                <div class="clickable-link">
                  <span class="nav-link"> Cours individuels </span>
                </div>
                <div class="hidden-link" style='display: none'>
                  <a href="formules-indiv.php"> Nos formules </a>
                  <a href="jouer-pro.php"> Réserver avec un Pro </a>
                  <a href="https://otennistourbooking.simplybook.it" target="_blank">Réserver une leçon </a>
                </div>
              </li>
              
              <li class="nav-item">
                <a href="equipe.php" class="nav-link btn"> Notre Equipe </a>
              </li>

              <li class="nav-item">
                <a href="contact.php" class="nav-link btn"> Contact </a>
              </li>

              <li class="nav-item">
                <a href="covid.php" class="nav-link btn"> Covid-19 </a>
              </li>

              <!-- <li class="nav-item">
                <a href="login.php" target="_blank" class="nav-link btn"> Connexion </a>
              </li> -->
            </ul>
      </nav>
    <script src="JS/script.js?v=<?php echo time(); ?>"></script>
</div>