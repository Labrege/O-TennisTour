<!-- Pour valider le boutton submit -->
<script>
     $(document).ready(function(){
        $('.time-select').on('change', function() {
            $('.time-select').not(this).prop('checked', false);
            $('.time-select').not(this).parent().parent().removeClass('checked');
        });
     // Valide le boutton s'il y a une heure 
     $('.time-select').click(function () {
            //check if checkbox is checked
            if ($('.time-select').is(':checked')) {
                $(this).parent().parent().addClass('checked');
                $('.valider-heure').removeAttr('disabled'); //enable input

            } else {
                $(this).parent().parent().removeClass('checked');
                $('.valider-heure').attr('disabled', true); //disable input
            }
        });
     });
</script>

<?php
require('dbh.inc.php');

if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $prof = $_POST['prof'];
    $time = $_POST['time'];
    $dateSmallFormat = date("d/m", strtotime($date));

    //Choix du prof
    if($prof == 'all'){
        $searchProf = '';
    }
    else{
        $searchProf = "AND profDispo = '$prof'";
    }

    //Choix de l'heure
    if($time == 'all'){
        $searchTime = "";
    }
    else{
        $searchTime = "AND heureDispo >= '$time'";
    }

    $sqlDate = "SELECT DISTINCT profDispo, statutProf FROM disposindivs, profs WHERE disposindivs.profDispo = profs.prenomProf AND coursReserve = '0'".$searchProf." ".$searchTime." AND dateDispo ='$date' ORDER BY statutProf,  profs.prenomProf ASC";
    $searchDate = $conn->query($sqlDate);

    //Si la recherche donne un résultat
    if($searchDate->num_rows > 0){
        //Tant qu'il y a des résultat dans la table, afficher...
        while ($donnees = $searchDate->fetch_assoc()){
            ?>
            <div class="card-indiv">
                <div class="card-indiv-photo">
                    <img src="Images/olivier-renaud.jpeg" alt="">
                </div>
                <div class="card-indiv-text">
                    <!-- Nom du prof -->
                    <h1> <?php echo $donnees['profDispo'];?> </h1>
                    <div class="ligne-noire"></div>
                    <div class="statut-coach">
                        <h3> <?php echo $donnees['statutProf'];?> </h3>
                    </div>

                    <!-- dispo du prof -->
                    <h2> Disponibilité(s) pour le <?php echo $dateSmallFormat;?></h2>
                    <div class="card-indiv-dispo-container">
                        <!-- Création d'info pour l'étape 2-->
                        <input type="text" name='date' value='<?php echo $date;?>' style='display: none;'>
                        <?php
                            $profDispo = $donnees['profDispo'];
                            $sqlHeure = "SELECT DISTINCT heureDispo FROM disposindivs WHERE dateDispo ='$date' AND profDispo='$profDispo' AND heureDispo>='$time' AND coursReserve='0' ORDER BY heureDispo ASC";
                            $searchHeure = $conn->query($sqlHeure);

                            while ($donneesheures = $searchHeure->fetch_assoc()){
                        ?>
                            <div class="card-indiv-dispo">
                            <label class='card-indiv-dispo-label'>
                                <input style='display: none;' class='time-select' type="checkbox" name='time-select' value='<?php echo $donneesheures['heureDispo'].' '.$profDispo.' '.$donnees['statutProf'];?>'> 
                                <?php 
                                $heureSelect = new DateTime($donneesheures['heureDispo']);
                                echo $heureSelect->format('H:i'); 
                                ?>
                            </label>
                        </div>  
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    else{
        ?>
        <div class="no-results">
            <h2> Oops... Aucun résultat ne correspond à votre recherche. Veuillez saisir une nouvelle recherche.</h2>
        </div>
        <?php
    }
}

?>