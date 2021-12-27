<?php

include '../espace-membre/espace_membre_liens.php';
if (isset($_SESSION['useruid'])){
$email = $_SESSION["useremail"];
$photo = $_SESSION["userphoto"];

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

<!-- HTML -->
    <header>
        <div class="header-container">
            <img src="../Images/filet.jpg" alt="">
            <div class="screen"></div>
            <div class="profile-pic-container">
                <div class="profile-pic">
                    <img src="../Images/coachs/<?php echo $photo;?>" alt="">
                </div>
                <br>
                <div>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <label for="nomvideos">Chosissez votre photo :</label>
                            <input type="file"
                                name="file"
                                accept="image/*" required>

                            <input type="submit" name="Submit" class="boutton-post-video" required>
                        </form>


                    </div>

                    </div>
                        <button id="myBtn"> <i class="fa fa-picture-o" aria-hidden="true"></i> Changer ma photo</button>
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

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
</script>
