<?php
session_start();
require ('../includes/dbh.inc.php');

if(isset($_POST['hourSubmit'])){
    // Variables
    $date = $_POST['date'];
    $dayAfter = date('Y-m-d', strtotime($date . ' +1 day'));
    $name = $_POST['name'];
    $sqlDelete = "DELETE FROM disposindivs WHERE dateDispo = '$date' AND coursReserve = '0' AND profDispo = '$name'";
    $conn->query($sqlDelete);

    if(!empty($_POST['checked_time'])) {
        foreach($_POST['checked_time'] as $time) {
            $mysqltime = date ('H:i:s', strtotime($time));
            // echo $mysqltime;
            // echo '<br>';
            $sqlExist = "SELECT * FROM disposindivs WHERE dateDispo='$date' AND courReserve = '0' AND heureDispo='$mysqltime' AND profDispo = '$name'";
            $searchResa = $conn->query($sqlExist);
            if($searchResa){
                echo 'already found';
            }
            else{
                $sqlInsert = "INSERT INTO disposindivs (dateDispo, heureDispo, profDispo) VALUES ('$date', '$mysqltime', '$name')";
                $conn->query($sqlInsert);
                header('Location: espace_membre_index.php');
            }
        }
    }
}

