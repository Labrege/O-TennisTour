<?php
  require 'links.php';
?>
<div class="header-logo">
          <a href="index.php"><img class= "logo_club" src="Images/logoheader-2.png" alt="logo-test"></a>
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
                <a href="a-propos.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'a-propos.php') !== false){
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
                  <a href="infrastructures.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'infrastructures.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">Sites</a>
                </li>
                <li class="nav-item">
                  <a href="formules.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'formules.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">formules</a>
                </li>
              <li class="nav-item">
                  <a href="inscriptions.php" class="nav-link btn <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'inscriptions.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">inscription</a>
                </li>
            </ul>
      </nav>
    <script src="JS/script.js?v=<?php echo time(); ?>"></script>
</div>