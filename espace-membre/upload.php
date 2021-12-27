<?php
if(!isset($_SESSION)){
    session_start();
}
require ('../includes/dbh.inc.php');
$userId = $_SESSION['useruid'];

if (isset($_POST['Submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('png', 'jpg', 'jpeg');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 10000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../Images/coachs/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $nomvideo = $fileNameNew;

                //Fetch DATA from DB//
                $sql = "UPDATE users SET userPhoto = '$nomvideo' WHERE userUid = '$userId'";
                $upload = $conn->query($sql);
                if($upload){
                    header("Location: espace_membre_index.php?error=uploadcomplete");
                    $_SESSION["userphoto"] = $nomvideo;
                }
                else{
                    header('Location: espace_membre_index.php?error=sqlerror');
                }

            }else{
                header('Location: espace_membre_index.php?error=filetoobig');
            }
        }
        else{
            header('Location: espace_membre_index.php?error=uploaderror');
        }
    }
    else{
        header('Location: espace_membre_index.php?error=wrongtype');
    }

}