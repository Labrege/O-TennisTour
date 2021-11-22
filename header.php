<?php
  require 'links.php';
  require 'includes/dbh.inc.php';
?>
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
                <a href="index.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'index.php') !== false){
              echo 'jaune';
            }else{
              echo "";
          }
        ?>">Accueil </a>
              </li>
              <li class="nav-item">
                <a href="stages.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'stages.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">Nos Stages </a>
              </li>

              <li class="nav-item">
                <a href="equipe.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'equipe.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">Equipe</a>
              </li>
              <li class="nav-item">
                  <a href="inscriptions.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'inscriptions.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">Reservation stages</a>
                </li>
                <li class="nav-item">
                  <a href="cours-individuels.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'cours-individuels.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">Cours individuels</a>
                </li>
                <li class="nav-item">
                  <a href="contact.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="covid.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'covid.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">COVID-19</a>
                </li>
                <li class="nav-item">
                  <a href="login.php" target='_blank' class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'login.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">Connexion</a>
                </li>
            </ul>
      </nav>
    <script src="JS/script.js?v=<?php echo time(); ?>"></script>
</div>