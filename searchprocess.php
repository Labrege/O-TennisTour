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
require('includes/dbh.inc.php');

if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $today = time();
    $prof = $_POST['prof'];
    $time = $_POST['time'];
    $dateSmallFormat = date("d M", strtotime($date));
    $dateLargeFormat = date("d/m/Y", strtotime($date));
    $dateDif = strtotime($date) - $today;
    $numDayDif = round($dateDif / (60 * 60 * 24));

    function getWeekday($dateNum) {
        return date('w', strtotime($dateNum));
    }
    
    $dayNumber = getWeekday($date); // returns 4

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

    $sqlDate = "SELECT DISTINCT profDispo, userName, coursReserve, userStatut, userName, userEmail, dateDispo, userPhoto FROM disposindivs, users WHERE disposindivs.profDispo = users.userName AND coursReserve = '0'".$searchProf." ".$searchTime." AND dateDispo ='$date' ORDER BY userStatut,  userName ASC";
    $searchDate = $conn->query($sqlDate);

    //Si la recherche donne un résultat
    if($searchDate->num_rows > 0){
        ?>
            <div class="result-title">
                <h2> Résultats pour le 
                    <?php 
                    echo $dateLargeFormat;
                    if($prof != 'all'){ 
                        echo " avec $prof";
                    }
                    if($time != 'all'){ 
                        echo " à partir de $time";
                    }
                    ?>
                </h2>
            </div>

            <div class="card-indiv-container">
            <?php
            //Tant qu'il y a des résultat dans la table, afficher...
            while ($donnees = $searchDate->fetch_assoc()){
                ?>
                <div class="card-indiv">
                    <div class="profile-indiv">
                        <a href="equipe.php#<?php echo $donnees['profDispo'];?>" target='_blank'> 
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                            <p>Voir profil</p>
                        </a>
                    </div>
                    <div class="card-indiv-photo">
                        <img src="Images/coachs/<?php echo $donnees['userPhoto'];?>" alt="">
                        <div class="card-indiv-screen"></div>
                        <div class="card-indiv-name">
                            <h1> <?php echo $donnees['profDispo'];?> </h1>
                            <div class="ligne-noire"></div>
                            <div class="statut-coach">
                                <h3> <span class="capitalize"><?php echo $donnees['userStatut'];?></span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-indiv-text">
                        <!-- dispo du prof -->
                        <h2> Disponibilité(s) pour le <?php echo $dateSmallFormat;?></h2>
                        <div class="card-indiv-dispo-container">
                            <!-- Création d'info pour l'étape 2-->
                            <input type="text" name='date' value='<?php echo $date;?>' style='display: none;'>
                            <?php
                                $profDispo = $donnees['profDispo'];
                                $profEmail = $donnees['userEmail'];
                                $nullValue = 0;
                                $sqlHeure = "SELECT DISTINCT heureDispo FROM disposindivs WHERE dateDispo ='$date' AND profDispo='$profDispo' AND heureDispo>='$time' AND coursReserve = '$nullValue' ORDER BY heureDispo ASC";
                                $searchHeure = $conn->query($sqlHeure);

                                while ($donneesheures = $searchHeure->fetch_assoc()){
                            ?>
                                <div class="card-indiv-dispo">
                                <label class='card-indiv-dispo-label'>
                                    <input style='display: none;' class='time-select' type="checkbox" name='time-select' value='<?php echo $donneesheures['heureDispo'].' '.$profDispo.' '.$donnees['userStatut'].' '.$profEmail.' '.$donnees['dateDispo'];?>'> 
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
            ?>
            </div>
        <?php
        }
    // Si aucune donnée !
    else{
        ?>
        <h2> Oops... Nous n'avons trouvé aucun résultat pour le 
            <?php 
            echo $dateLargeFormat;
            if($prof != 'all'){ 
                echo " avec $prof";
            }
            if($time != 'all'){ 
                echo " à partir de $time";
            }
            ?>
            <br>
            <br>
            Pas de panique ! Voici quelques créneaux similaires. 
        </h2>
        <?php
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

    
        if($prof != 'all' && $time != 'all'){
            $searchProf = '';
            $searchTime = "AND heureDispo >= '$time'";
        }

        $sqlDate = "SELECT DISTINCT profDispo, userName, coursReserve, userStatut, userName, userEmail, dateDispo, userPhoto FROM disposindivs, users WHERE disposindivs.profDispo = users.userName AND coursReserve = '0'".$searchProf." ".$searchTime." AND dateDispo >='$date' ORDER BY userStatut,  userName ASC LIMIT 6";
        $searchDate = $conn->query($sqlDate);

        //Si la recherche donne un résultat
        if($searchDate->num_rows > 0){
            ?>
            <div class="card-indiv-container">
            <?php
            //Tant qu'il y a des résultat dans la table, afficher...
            while ($donnees = $searchDate->fetch_assoc()){
                ?>
                <div class="card-indiv">
                    <div class="profile-indiv">
                        <a href="equipe.php#<?php echo $donnees['profDispo'];?>" target='_blank'> 
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                            <p>Voir profil</p>
                        </a>
                    </div>
                    <div class="card-indiv-photo">
                        <img src="Images/coachs/<?php echo $donnees['userPhoto'];?>" alt="">
                        <div class="card-indiv-screen"></div>
                        <div class="card-indiv-name">
                            <h1> <?php echo $donnees['profDispo'];?> </h1>
                            <div class="ligne-noire"></div>
                            <div class="statut-coach">
                                <h3> <span class="capitalize"><?php echo $donnees['userStatut'];?></span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-indiv-text">
                        <!-- dispo du prof -->
                        <h2> Disponibilité(s) pour le <?php echo date("d M", strtotime($donnees['dateDispo']))?></h2>
                        <div class="card-indiv-dispo-container">
                            <!-- Création d'info pour l'étape 2-->
                            <input type="text" name='date' value='<?php echo $donnees['dateDispo'];?>' style='display: none;'>
                            <?php
                                $profDispo = $donnees['profDispo'];
                                $profEmail = $donnees['userEmail'];
                                $nullValue = 0;
                                $newDate = $donnees['dateDispo'];
                                $sqlHeure = "SELECT DISTINCT heureDispo FROM disposindivs WHERE dateDispo ='$newDate' AND profDispo='$profDispo' AND heureDispo>='$time' AND coursReserve = '$nullValue' ORDER BY heureDispo ASC";
                                $searchHeure = $conn->query($sqlHeure);

                                while ($donneesheures = $searchHeure->fetch_assoc()){
                            ?>
                                <div class="card-indiv-dispo">
                                <label class='card-indiv-dispo-label'>
                                    <input style='display: none;' class='time-select' type="checkbox" name='time-select' value='<?php echo $donneesheures['heureDispo'].' '.$profDispo.' '.$donnees['userStatut'].' '.$profEmail.' '.$donnees['dateDispo'];;?>'> 
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
                ?>
            </div>
            <?php
        }

        else{
        $today = date('Y-m-d');
        $twoDays = date('Y-m-d', strtotime($today. ' + 2 days'));
        $sqlDate = "SELECT DISTINCT profDispo, userName, coursReserve, userStatut, userName, userEmail, dateDispo, userPhoto FROM disposindivs, users WHERE disposindivs.profDispo = users.userName AND coursReserve = '0' AND dateDispo >='$twoDays' ORDER BY userStatut,  userName ASC LIMIT 6";
        $searchDate = $conn->query($sqlDate);

        //Si la recherche donne un résultat
        if($searchDate->num_rows > 0){
            ?>
            <div class="card-indiv-container">
            <?php
            //Tant qu'il y a des résultat dans la table, afficher...
            while ($donnees = $searchDate->fetch_assoc()){
                ?>
                <div class="card-indiv">
                    <div class="profile-indiv">
                        <a href="equipe.php#<?php echo $donnees['profDispo'];?>" target='_blank'> 
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                            <p>Voir profil</p>
                        </a>
                    </div>
                    <div class="card-indiv-photo">
                        <img src="Images/coachs/<?php echo $donnees['userPhoto'];?>" alt="">
                        <div class="card-indiv-screen"></div>
                        <div class="card-indiv-name">
                            <h1> <?php echo $donnees['profDispo'];?> </h1>
                            <div class="ligne-noire"></div>
                            <div class="statut-coach">
                                <h3> <span class="capitalize"><?php echo $donnees['userStatut'];?></span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-indiv-text">
                        <!-- dispo du prof -->
                        <h2> Disponibilité(s) pour le <?php echo date("d M", strtotime($donnees['dateDispo']))?></h2>
                        <div class="card-indiv-dispo-container">
                            <!-- Création d'info pour l'étape 2-->
                            <input type="text" name='date' value='<?php echo $donnees['dateDispo'];?>' style='display: none;'>
                            <?php
                                $profDispo = $donnees['profDispo'];
                                $profEmail = $donnees['userEmail'];
                                $nullValue = 0;
                                $newDate = $donnees['dateDispo'];
                                $sqlHeure = "SELECT DISTINCT heureDispo FROM disposindivs WHERE dateDispo ='$newDate' AND profDispo='$profDispo' AND heureDispo>='08:00' AND coursReserve = '$nullValue' ORDER BY heureDispo ASC";
                                $searchHeure = $conn->query($sqlHeure);

                                while ($donneesheures = $searchHeure->fetch_assoc()){
                            ?>
                                <div class="card-indiv-dispo">
                                <label class='card-indiv-dispo-label'>
                                    <input style='display: none;' class='time-select' type="checkbox" name='time-select' value='<?php echo $donneesheures['heureDispo'].' '.$profDispo.' '.$donnees['userStatut'].' '.$profEmail.' '.$donnees['dateDispo'];;?>'> 
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
                ?>
            </div>
            <?php
        }
        }
        ?>
        <?php
    }
}
?>