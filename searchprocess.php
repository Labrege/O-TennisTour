<!-- Pour valider le boutton submit -->
<script>
     $(document).ready(function(){
     // Valide le boutton s'il y a une heure 
        $('.time-select').click(function () {
            //check if checkbox is checked
            if ($('.time-select').is(':checked')) {

                $('.valider-heure').removeAttr('disabled'); //enable input

            } else {
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
    $dateSmallFormat = date("d/m", strtotime($date));

    if($prof == 'all'){
        $searchProf = '';
    }
    else{
        $searchProf = "AND profDispo = '$prof'";
    }

    $sqlDate = "SELECT DISTINCT profDispo FROM disposindivs WHERE dateDispo ='$date'"."$searchProf";
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
                        <h1> <?php echo $donnees['profDispo'];?> </h1>
                        <h2> Disponibilité(s) pour le <?php echo $dateSmallFormat;?></h2>
                        <div class="card-indiv-dispo-container">
                            <?php
                                $profDispo = $donnees['profDispo'];
                                $sqlHeure = "SELECT heureDispo FROM disposindivs WHERE dateDispo ='$date' AND profDispo='$profDispo'";
                                $searchHeure = $conn->query($sqlHeure);

                                while ($donneesheures = $searchHeure->fetch_assoc()){
                            ?>
                              <div class="card-indiv-dispo">
                                <input class='time-select' type="checkbox">
                                <label> <?php 
                                    $heureSelect = new DateTime($donneesheures['heureDispo']);
                                    echo $heureSelect->format('h:i'); 
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
        echo 'No results';
    }
}

?>