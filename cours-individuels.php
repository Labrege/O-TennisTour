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
            var strdate = $('.date-indiv').val();
            var date = new Date(Date.parse(strdate));
            var dd = String(date.getDate()).padStart(2, '0');
            var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = date.getFullYear();
            date = yyyy + '/' + mm + '/' + dd;
            var dateToEcho = dd + '/' + mm + '/' + yyyy;
            var prof = $('.prof-indiv').val();
            var time = $('.time-indiv').val();
            var submit = $('#btnRechercher').val();
            $(".card-indiv-container").load("searchprocess.php", {
                date: date,
                dateToEcho: dateToEcho,
                prof:prof,
                time:time,
                submit: submit
            });
        }

        $('.form-indiv').change(function(){
            var strdate = $('.date-indiv').val();
            var date = new Date(Date.parse(strdate));
            var dd = String(date.getDate()).padStart(2, '0');
            var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = date.getFullYear();
            date = yyyy + '/' + mm + '/' + dd;
            var dateToEcho = dd + '/' + mm + '/' + yyyy;
            var prof = $('.prof-indiv').val();
            var time = $('.time-indiv').val();
            var submit = $('#btnRechercher').val();
            $(".card-indiv-container").load("searchprocess.php", {
                date: date,
                dateToEcho: dateToEcho,
                prof:prof,
                time:time,
                submit: submit
            });
        });
    });
</script>
<?php
$dateval = date(1);
?>

<!-- HTML -->
<div class="rest">
    <div id="espace_membre_indiv">
        <div class="calendar">
            <div class="screen-inscription"></div>
            <img class="background-inscription" src="Images/tennis-court.jpg" alt="">
            <form action="#" method='POST' class='form-indiv'>    
                <!-- Datepicker Input -->
                <input style='text-align: center;' type="text" id="datepicker" onkeydown="return false" name='date-indiv' class='date-indiv' value="<?php echo date('Y-m-d', strtotime($dateval.'+ 2 days')); ?>">

                <!-- Load tous les profs -->
                <select name="" class='prof-indiv' id='form-info'>
                    <option value="all" selected> Tous les profs </option>
                <?php
                $sqlProf = "SELECT * FROM users WHERE plan = '4' AND (userStatut = 'coach' OR userStatut = 'sparring')";
                $searchprofs = $conn->query($sqlProf);

                while($donnesprofs = $searchprofs->fetch_assoc()){
                ?>
                    <option value="<?php echo $donnesprofs['userName'];?>"> <span style='text-transform: capitalize;'><?php echo $donnesprofs['userName'];?></span> </option>
                <?php
                }
                ?>                   
                </select>
                <select name="time-indiv" class="time-indiv">
                    <option value="all">Toutes les heures</option>
                    <option value="08:00">à partir de 8h</option>
                    <option value="09:00">à partir de 9h</option>
                    <option value="10:00">à partir de 10h</option>
                    <option value="11:00">à partir de 11h</option>
                    <option value="12:00">à partir de 12h</option>
                    <option value="13:00">à partir de 13h</option>
                    <option value="14:00">à partir de 14h</option>
                    <option value="15:00">à partir de 15h</option>
                    <option value="16:00">à partir de 16h</option>
                    <option value="17:00">à partir de 17h</option>
                    <option value="18:00">à partir de 18h</option>
                    <option value="19:00">à partir de 19h</option>
                    <option value="20:00">à partir de 20h</option>
                    <option value="21:00">à partir de 21h</option>
                </select>
                <div class="btnContainer" style="display: none;">
                    <button type="submit" value="Submit" id="btnRechercher" class="button-valide"> Rechercher </button>
                </div>
            </form>
            <div class="download-container">
                <a href="PDF/OTT - Nos joueurs.pdf" target='_blank' class="button_hollow"> Voir les joueurs OTT </a>
                <a href="PDF/OTT - brochure prix.pdf" target='_blank' class="button"> Voir les tarifs </a>
            </div>
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
<!-- Pickaday script -->
<script src='JS/datepick1.js?v=<?php echo time();?>'></script>
