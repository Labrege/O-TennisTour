<header>
  <?php
      require 'header.php'
  ?>
</header>

<?php
if(isset($_POST['time-select']) && isset($_POST['date'])){
    $datepicked = date('d M Y', strtotime($_POST['date']));
    $info = $_POST['time-select'];
    $divide = explode(' ', $info);
    $timepicked = date("H:i", strtotime($divide[0]));
    $profpicked = $divide[1];
    
    ?>
    <div class="rest">
      <div id="espace_membre_indiv_booking">
        <div class="titre-indiv-booking">
          <div class="screen-booking"></div>
          <img class="background-booking" src="Images/coach.jpg" alt="">
          <div class="titre-info-container">
            <h2> Mes informations </h2>
            <h3> Réservation pour le <?php echo $datepicked?> à <?php echo $timepicked?> avec <?php echo $profpicked?></h3>
          </div>
        </div>
        <form action="#" method="post" class='form-indiv-booking'>
          <div class="input-container-indiv-booking">
            <label for="client-name">Prénom * : </label>
            <input type="text" name="client-name" class="client-info client-name" placeholder='Prénom'>
          </div>
          <div class="input-container-indiv-booking">
            <label for="client-surname">Nom * : </label>
            <input type="text" name="client-surname" class="client-info client-surname" placeholder='Nom'>
          </div>
          <div class="input-container-indiv-booking">
            <label for="client-tel">Téléphone Portable  * : </label>
              <input type="tel" name="client-tel" class="client-info client-tel" placeholder='0766666666'>
          </div>
          <div class="input-container-indiv-booking">
            <label for="client-surname">Adresse Mail  * : </label>
            <input type="text" name="client-surname" class="client-surname" placeholder='example@gmail.com'>
          </div>
          <button> Payer par carte </button>
        </form>
      </div>
    </div>
    <?php

}
else{
  header('Location: cours-individuels.php');
}
?>


