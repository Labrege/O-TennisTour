<header>
  <?php
      require 'header.php'
  ?>
</header>
<?php
if(isset($_POST['time-select']) && isset($_POST['date'])){
    $datepicked = $_POST['date'];
    $info = $_POST['time-select'];
    $divide = explode(' ', $info);
    $timepicked = $divide[0];
    $profpicked = $divide[1];
    
    ?>
    <div class="rest">
      <div id="espace_membre_indiv_booking">
        <div class="titre-indiv-booking">
          <h2> Mes informations </h2>
        </div>
        <form action="#" method="post" class='form-indiv-booking'>
          <div class="input-container-indiv-booking">
            <label for="client-name">Votre Nom * : </label>
            <input type="text" name="client-name" class="client-name" placeholder='Prénom'>
          </div>
          <div class="input-container-indiv-booking">
            <label for="client-name">Votre Nom * : </label>
            <input type="text" name="client-name" class="client-name" placeholder='Prénom'>
          </div>
        </form>
      </div>
    </div>
    <?php

}
else{
  header('Location: cours-individuels.php');
}
