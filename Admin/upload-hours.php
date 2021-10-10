<?php
session_start();
require ('../includes/dbh.inc.php');

if(isset($_POST['hourSubmit'])){
    // Variables
    $date = $_POST['date'];
    $dayAfter = date('Y-m-d', strtotime($date . ' +1 day'));
    $name = $_POST['name'];
    $sqlDelete = "DELETE FROM disposindivs WHERE dateDispo = '$date' AND coursReserve = '0'";
    $conn->query($sqlDelete);

    if(!empty($_POST['checked_time'])) {
        foreach($_POST['checked_time'] as $time) {
            $sqlInsert = "INSERT INTO disposindivs (dateDispo, heureDispo, profDispo) VALUES ('$date', '$time', '$name')";
            $conn->query($sqlInsert);
        }
    }
    else{
        header('Location: admin-post.php');
    }
    header("Location: admin-post.php?lastDate=$dayAfter");

}