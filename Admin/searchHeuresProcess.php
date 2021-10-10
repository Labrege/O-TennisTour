<?php
session_start();
require('../includes/dbh.inc.php');
$name= $_SESSION['username'];
$date = $_POST['date'];
?>

<form action="upload-hours.php" method='POST'>
    <div class="form-container">
    <?php
    $sqlHour = "SELECT * FROM horaires";
    $searchHours = $conn->query($sqlHour );

    //Si la recherche donne un résultat
    if($searchHours->num_rows > 0){
        //Tant qu'il y a des résultat dans la table, afficher...
        while ($donnees = $searchHours->fetch_assoc()){
            $heureStartSelect = new DateTime($donnees['hourStart']);
            $hourStart = $heureStartSelect->format('H:i');

            $heureEndSelect = new DateTime($donnees['hourEnd']);
            $hourEnd = $heureEndSelect->format('H:i');
            ?>
            <div class="dispo-container 
            <?php 
                $sqlResaCheck = "SELECT * FROM disposindivs WHERE profDispo='$name' AND dateDispo='$date' AND heureDispo='$hourStart' AND coursReserve != '0'";
                $searchResa = $conn->query($sqlResaCheck );
                //Si la recherche donne un résultat
                if($searchResa->num_rows > 0){
                    //Tant qu'il y a des résultat dans la table, afficher...
                    while ($donneesResa = $searchResa->fetch_assoc()){
                        if($donneesResa['coursReserve'] == 1){
                            echo 'booked';
                        }
                        elseif($donneesResa['coursReserve'] == 2){
                            echo 'unavailable';
                        }
                    }
                }
                ?>">
                <label for='<?php echo $donnees['id'];?>'> <?php echo $hourStart; ?> - <?php echo $hourEnd;?></label>
                <input type="date" name='date' value='<?php echo date('Y-m-d', strtotime($date));?>' style='display: none;'>
                <input type="text" name='name' value='<?php echo $name;?>' style='display: none;'>
                <input type="checkbox" class='time-select' id='<?php echo $donnees['id'];?>' name='checked_time[]' value='<?php echo $donnees['hourStart'];?>'
                <?php
                $sqlHourCheck = "SELECT * FROM disposindivs WHERE profDispo='$name' AND dateDispo='$date' AND heureDispo='$hourStart'";
                if ($result=mysqli_query($conn,$sqlHourCheck)) {
                    $rowcount=mysqli_num_rows($result);
                    if($rowcount>0){
                        echo 'checked ';
                    }
                }

                $sqlResaCheck = "SELECT * FROM disposindivs WHERE profDispo='$name' AND dateDispo='$date' AND heureDispo='$hourStart' AND coursReserve != '0'";
                if ($resultResa=mysqli_query($conn,$sqlResaCheck)) {
                    $rowcountResa=mysqli_num_rows($resultResa);
                    if($rowcountResa>0){
                        ?>
                        onclick="return false;"
                        <?php
                    }
                }

                ?>
                >
            </div>
            <?php
        }
    }

    ?>
    </div>
    <button type='submit' class='hourSubmit' name='hourSubmit'> Enregistrer mes choix </button>
</form>