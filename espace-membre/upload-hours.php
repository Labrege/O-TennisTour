<?php
session_start();
require ('../includes/dbh.inc.php');

if(isset($_POST['hourSubmit'])){
    // Variables
    $date = $_POST['date'];
    $dayAfter = date('Y-m-d', strtotime($date . ' +1 day'));
    $name = $_POST['name'];

    //Delete for day
    $sqlDelete = "DELETE FROM disposindivs WHERE dateDispo = '$date' AND coursReserve = '0' AND profDispo = '$name'";
    $conn->query($sqlDelete);

    if(!empty($_POST['checked_time'])) {
        foreach($_POST['checked_time'] as $time) {
            $sqlInsert = "INSERT INTO disposindivs (dateDispo, heureDispo, profDispo) VALUES ('$date', '$time', '$name')";
            $conn->query($sqlInsert);

            //Add for next weeks
            if(!empty($_POST['next_week'])){
                foreach($_POST['next_week'] as $nextWeek){
                    $sqlDelete = "DELETE FROM disposindivs WHERE dateDispo = '$nextWeek' AND coursReserve = '0' AND profDispo = '$name'";
                    $conn->query($sqlDelete);
                    $sqlNextWeek = "INSERT INTO disposindivs (dateDispo, heureDispo, profDispo) VALUES ('$nextWeek', '$time', '$name')";
                    // echo '<br>';
                    $conn->query($sqlNextWeek);
                }
            }
        }
        header('Location: espace_membre_index.php?update=successfull');
    }
    header('Location: espace_membre_index.php?update=notimeselected');
}

