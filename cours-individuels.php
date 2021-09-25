<header>
  <?php
      require 'header.php'
  ?>
</header>
<!-- Date -->
<script>
    $(document).ready(function(){
        //Permet de selectionner uniquement une seule heure
        $('.time-select').on('change', function() {
            $('.time-select').not(this).prop('checked', false);
        });

        // Valide le boutton s'il y a une heure 
        $('.time-select').click(function () {
            //check if checkbox is checked
            if ($('.time-select').is(':checked')) {

                $('.valider-heure').removeAttr('disabled'); //enable input

            } else {
                $('.valider-heure').attr('disabled', true); //disable input
            }
        });

        window.onload = function(){
            var date = $('.date-indiv').val();
            var prof = $('.prof-indiv').val();
            var submit = $('#btnRechercher').val();
            $(".card-indiv-container").load("searchprocess.php", {
                date: date,
                prof:prof,
                submit: submit
            });
        }

        $('.form-indiv').change(function(){
            var date = $('.date-indiv').val();
            var prof = $('.prof-indiv').val();
            var submit = $('#btnRechercher').val();
            $(".card-indiv-container").load("searchprocess.php", {
                date: date,
                prof:prof,
                submit: submit
            });
        });
    });
</script>


<!-- HTML -->
<div class="rest">
    <div id="espace_membre_indiv">
        <div class="calendar">
        <div class="screen-inscription"></div>
        <img class="background-inscription" src="Images/court.jpg" alt="">
            <form action="#" method='POST' class='form-indiv'>
                <input type="date" onkeydown="return false" name='date-indiv' class='date-indiv' id='form-info' min='<?php echo date('Y-m-d'); ?>' value="<?php echo date('Y-m-d'); ?>">
                
                <!-- Load tous les profs -->
                <select name="" class='prof-indiv' id='form-info'>
                    <option value="all" selected> Tous les profs </option>
                <?php
                $sqlProf = 'SELECT * FROM profs';
                $searchprofs = $conn->query($sqlProf);

                while($donnesprofs = $searchprofs->fetch_assoc()){
                ?>
                    <option value="<?php echo $donnesprofs['prenomProf'];?>"> <?php echo $donnesprofs['prenomProf'];?> </option>
                <?php
                }
                ?>                   
                </select>
                <div class="btnContainer" style="display: none;">
                    <button type="submit" value="Submit" id="btnRechercher" class="button-valide"> Rechercher </button>
                </div>
            </form>
        </div>
        
        <form class="results" method='POST' action='cours-individuels-booking.php'>
            <div class="card-indiv-container">
                
            </div>
            <button disabled class='valider-heure'> continuer </button>
        </form>
    </div>
</div>

</body>
</html>