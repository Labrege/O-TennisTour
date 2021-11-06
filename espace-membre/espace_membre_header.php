<?php

include '../espace-membre/espace_membre_liens.php';
if (isset($_SESSION['useruid'])){
$email = $_SESSION["useremail"];

// Verification de la fin de l'abonnement
$date = date("Y-m-d");
if($_SESSION["endsub"]!== "0000-00-00"){
    if($date>=$_SESSION["endsub"]){
        $pid=0;
        $conn->query("UPDATE users SET plan = '$pid', endSub = '0000-00-00' WHERE userEmail='$email'");
        $_SESSION["plan"] ==0;
    }
}
?>
    <header>
        <div class="header-container">
            <img src="../Images/filet.jpg" alt="">
            <div class="screen"></div>
            <div class="profile-pic-container">
                <div class="profile-pic">
                    <img src="../Images/coachs/solal.jpg" alt="">
                </div>
                <div class="profile-text">
                    <h1><?php echo $_SESSION['username'];?> <span class="uppercase"><?php echo $_SESSION['usersurname'];?></span></h1>
                </div>
            </div>
        </div>        
    </header>
<?php 
//Si mauvaise connexion - Retour à la page login
}else{
    header("location: ../login.php");
}
?>
