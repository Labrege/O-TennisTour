<?php
session_start();

if (isset($_SESSION['useruid']) && $_SESSION['plan']==4){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin.css?v=<?php echo time(); ?>">
    <title> OvalXV | Page Admin </title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Pickaday -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
</head>
<body>

<div class="side-bar">
    <ul>
        <li> <a href="admin-post.php"> Mes disponibilités </a> </li>
        <li> <a href="admin-recap.php"> Voir mes réservations </a> </li>
    </ul>
</div>
    
</body>
</html>

<?php
}else{
    header("location: ../login.php");
}
?>