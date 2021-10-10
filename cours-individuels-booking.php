<?php
if(isset($_POST['time-select']) && isset($_POST['date'])){
    $date1 = $_POST['date'];
    $date = date('d M Y', strtotime($date1));
    $info = $_POST['time-select'];
    $divide = explode(' ', $info);
    $timepicked = date("H:i", strtotime($divide[0]));
    $profpicked = $divide[1];
    $statutProf = $divide[2];
    $profEmail = $divide[3];
    ?>
    <header>
    <?php
      require 'header.php'
    ?>
    </header>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>

<script>
  $(document).ready(function(){
    window.onload = function(){
      var statutprof = <?php echo "'$statutProf'";?>;
      if(statutprof == 'coach'){
        if($('.client-condition').val() == 'ext'){
          $('.amount').val('10000');
          $('.price').html(' 100 € ');
          $('.condition').html(' exterieur');
        }
        else if($('.client-condition').val() == 'int') {
          $('.amount').val('12000');
          $('.price').html(' 120 € ');
          $('.condition').html(' interieur');
        }
      }
      else if(statutprof == 'sparring'){
        if($('.client-condition').val() == 'ext'){
          $('.amount').val('8000');
          $('.price').html(' 80 € ');
          $('.condition').html(' exterieur');
        }
        else if($('.client-condition').val() == 'int') {
          $('.amount').val('10000');
          $('.price').html(' 100 € ');
          $('.condition').html(' interieur');
        }
      }
    }

    $('.client-condition').on('change', function() {
      var statutprof = <?php echo "'$statutProf'";?>;
      if(statutprof == 'coach'){
        if($('.client-condition').val() == 'ext'){
          $('.amount').val('10000');
          $('.price').html(' 100 € ');
          $('.condition').html(' exterieur');
        }
        else if($('.client-condition').val() == 'int') {
          $('.amount').val('12000');
          $('.price').html(' 120 € ');
          $('.condition').html(' interieur');
        }
      }
      else if(statutprof == 'sparring'){
        if($('.client-condition').val() == 'ext'){
          $('.amount').val('8000');
          $('.price').html(' 80 € ');
          $('.condition').html(' exterieur');
        }
        else if($('.client-condition').val() == 'int') {
          $('.amount').val('10000');
          $('.price').html(' 100 € ');
          $('.condition').html(' interieur');
        }
      }
    });
  });
</script>
    <div class="rest">
      <div id="espace_membre_indiv_booking">
        <div class="titre-indiv-booking">
          <div class="screen-booking"></div>
          <img class="background-booking" src="Images/coach.jpg" alt="">
          <div class="titre-info-container">
            <h2> Mes informations </h2>
            <div class="ligne-rouge-indiv"></div>
            <h3> Réservation pour le <?php echo $date;?> à <?php echo $timepicked;?> avec <?php echo $profpicked?></h3>
          </div>
        </div>
        <div class="form-indiv-container">
          <!-- début formulaire -->
          <form action="create-checkout-session.php?prof=<?php echo $profpicked;?>&time=<?php echo $timepicked;?>&statut=<?php echo $statutProf;?>&date=<?php echo $date;?>&profEmail=<?php echo $profEmail;?>" method="post" class='form-indiv-booking'>
            <div class="input-container-indiv-booking">
              <label for="client-name">Prénom * : </label>
              <input type="text" name="clientname" class="client-info client-name" placeholder='Prénom'>
            </div>
            <div class="input-container-indiv-booking">
              <label for="client-surname">Nom * : </label>
              <input type="text" name="clientsurname" class="client-info client-surname" placeholder='Nom'>
            </div>
            <div class="input-container-indiv-booking">
              <label for="client-tel">Téléphone Portable  * : </label>
                <input type="tel" name="clienttel" class="client-info client-tel" placeholder='07-66-66-66-66'>
            </div>
            <div class="input-container-indiv-booking">
              <label for="client-mail">Adresse Mail  * : </label>
              <input type="text" name="clientmail" class="client-mail" placeholder='example@gmail.com'>
            </div>
          
            <div class="input-container-indiv-booking">
              <label for="client-condition">Format de jeu * : </label>
              <select name="client-condition" class="client-condition">
                <option value="ext"> Jeu en exterieur </option>
                <option value="int"> Jeu en intérieur </option>
              </select>
            </div>
            <div class="input-container-indiv-booking">
              <label for="client-surface">Préférence de surface * : </label>
              <select name="client-surface" class="client-surface">
                <option value="aucun-choix"> N'importe </option>
                <option value="green-set"> Green-Set </option>
                <option value="terre-battue"> Terre Battue Traditionelle </option>
              </select>
            </div>
            <div class="input-container-indiv-booking">
                <label for="client-age">Votre tranche d'âge * : </label>
                <select name="client-age" class="client-age">
                  <option value="18+"> Adulte (18 ans et plus) </option>
                  <option value="13-17"> Ado (13 ans à 17 ans) </option>
                  <option value="12-"> Enfant (12 ans et moins) </option>
                </select>
              </div>
            
            <div class="input-container-indiv-booking">
              <label for="client-localisation">Préférence de localisation 1 * : </label>
              <select name="client-localisation-1" class="client-localisation">
                <option value="4ar"> 4e arrondissement </option>
                <option value="5ar"> 5e arrondissement </option>
                <option value="6ar"> 6e arrondissement </option>
                <option value="9ar"> 9e arrondissement </option>
                <option value="11ar"> 11e arrondissement </option>
                <option value="12ar"> 12e arrondissement </option>
                <option value="13ar"> 13e arrondissement </option>
                <option value="14ar"> 14e arrondissement </option>
                <option value="15ar"> 15e arrondissement </option>
                <option value="16ar"> 16e arrondissement </option>
                <option value="17ar"> 17e arrondissement </option>
                <option value="18ar"> 18e arrondissement </option>
                <option value="19ar"> 19e arrondissement </option>
                <option value="20ar"> 20e arrondissement </option>
                <option value="Puteaux"> Puteaux </option>
                <option value="BB"> Boulogne-Billancourt </option>
              </select>
              <input type="number" class='amount' name='amount' value=''  style='display: none;'>
            </div>

            <div class="input-container-indiv-booking">
              <label for="client-localisation">Préférence de localisation 2 * : </label>
              <select name="client-localisation-2" class="client-localisation">
                <option value="4ar"> 4e arrondissement </option>
                <option value="5ar"> 5e arrondissement </option>
                <option value="6ar"> 6e arrondissement </option>
                <option value="9ar"> 9e arrondissement </option>
                <option value="11ar"> 11e arrondissement </option>
                <option value="12ar"> 12e arrondissement </option>
                <option value="13ar"> 13e arrondissement </option>
                <option value="14ar"> 14e arrondissement </option>
                <option value="15ar"> 15e arrondissement </option>
                <option value="16ar"> 16e arrondissement </option>
                <option value="17ar"> 17e arrondissement </option>
                <option value="18ar"> 18e arrondissement </option>
                <option value="19ar"> 19e arrondissement </option>
                <option value="20ar"> 20e arrondissement </option>
                <option value="Puteaux"> Puteaux </option>
                <option value="BB"> Boulogne-Billancourt </option>
              </select>
            </div>
            <button class='button blue button-pay' name='submit-pay'>  Passer au paiement </button>
          </form>

          <!-- début explication -->
          <div class="explication-indiv-container">
            <div class="explication-indiv-text">
              <h2> Votre réservation en détail ! </h2>
              <div class="ligne-rouge-indiv-text"></div>
              <?php
              if($statutProf == 'sparring'){
                ?>
                <h3> Une réservation avec un <?php echo $statutProf;?>, c'est quoi ? </h3>
                <p> Avec la formule <span class="red"> SPARRING </span> , nous vous proposons 1H de jeu avec l'un de nos sparrings. Tous classés entre 3/6 et Numéroté français, nos sparrings s'adapterons à votre niveau de jeu afin de vous garantir un confort de jeu et une qualité de séance sans égale !</p>

                <h3> Où aura lieu ma séance ? </h3>
                <p> Avec la formule <span class="red"> SPARRING </span> , votre séance se déroulera sur un terrain extérieur ou intérieur à l'abbri du vent et de la pluie. Après avoir finalisé votre réservation, vous recevrez un mail de confirmation contenant l'adresse du terrain (aussi proche que possible de votre choix de localisation et votre choix de surface).</p>

                <h3> Un sparring, c'est quoi exactement ? </h3>
                <p> <span class="red"> ATTENTION :</span> Un sparring n'est pas un coach. Le sparring pourra vous donner quelques conseils tactique ou technique mais la séance sparring <span class="red"> N'EST PAS</span> un coaching. </p>

                <h3> Annuler la séance ? </h3>
                <p> Un imprévu ? Pas de problème ! Si vous annulez au moins 24H avant la séance, nous reprogramerons votre séance à la date et heure de votre choix (dans la limite des disponibilités de votre <?php echo $statutProf;?>). <span class="red"> ATTENTION :</span> Si vous annulez moins de 24H avant votre séance, celle-ci sera facturée. </p>

                <h3> Comment annuler ma séance ? </h3>
                <p> Si vous souhaitez annuler votre séance, vous trouverez dans votre mail de confirmation les étapes à suivre et le numéro à contacter. </p>
                
                <h3> Le prix de ma séance ? </h3>
                <p> <span class="price red"></span>: Ce prix comprends : Le <?php echo $statutProf;?>, les balles et la location d'un terrain <span class="condition"></span>.</p>
              <?php
              }
              elseif ($statutProf == 'coach'){
                ?>
                <h3> Une réservation avec un <?php echo $statutProf;?>, c'est quoi ? </h3>
                <p> Avec la formule <span class="red"> COACH </span> ,  titulaires du DEJEPS ou du DESJEPS, votre coach vous aidera sur tous les aspects du jeu. Ce format est idéal pour progresser rapidement sur des points précis de votre jeu !</p>

                <h3> Où aura lieu ma séance ? </h3>
                <p> Avec la formule <span class="red"> COACH </span> ,  vous avez le choix de jouer soit à l'interieur, soit à l'exterieur. Après avoir finalisé votre réservation, vous recevrez un mail de confirmation contenant l'adresse du terrain (aussi proche que possible de votre choix de localisation).</p>

                <h3> Un coach, c'est quoi exactement ? </h3>
                <p> Le coach vous aidera à travailler des points précis de votre jeu. Problème de coup droit ? Envie de savoir maîtriser les effets ? Notre équipe de coach est là pour répondre à tous vos besoins tennistiques !</p>

                <h3> Annuler la séance ? </h3>
                <p> Un imprévu ? Pas de problème ! Si vous annulez au moins 24H avant la séance, nous reprogramerons votre séance à la date et heure de votre choix (dans la limite des disponibilités de votre <?php echo $statutProf;?>). <span class="red"> ATTENTION :</span> Si vous annulez moins de 24H avant votre séance, celle-ci sera facturée. </p>
              
                <h3> Comment annuler ma séance ? </h3>
                <p> Si vous souhaitez annuler votre séance, vous trouverez dans votre mail de confirmation les étapes à suivre et le numéro à contacter. </p>

                <h3> Le prix de ma séance ? </h3>
                <p> <span class="price red"></span>: Ce prix comprends le <?php echo $statutProf;?>, les balles et la location d'un terrain <span class="condition"></span>.</p>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <?php
}
else{
  header('Location: ../cours-individuels.php');
}
?>


