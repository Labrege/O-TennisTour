
<?php

/*$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ott";
*/

$servername = "localhost";
$dbusername = "u303072403_solal";
$dbpassword = "OvalXV75016";
$dbname = "u303072403_ott";


$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}


