<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Tennis Tour | Page Admin</title>
    <link rel="stylesheet" href="../CSS/admin.css?v=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<script>
    $(document).ready(function(){
        window.onload = function(){
            var strdate = $('.date-indiv').val();
            var date = new Date(Date.parse(strdate));
            var dd = String(date.getDate()).padStart(2, '0');
            var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = date.getFullYear();
            date = yyyy + '/' + mm + '/' + dd;
            var dateToEcho = dd + '/' + mm + '/' + yyyy;
            var submit = $('.boutton-post-video').val();
            $(".heures-dispo").load("searchHeuresProcess.php", {
                date: date,
                dateToEcho: dateToEcho,
                submit: submit
            });
        }

        $('.form-dispos').change(function(){
            var strdate = $('.date-indiv').val();
            var date = new Date(Date.parse(strdate));
            var dd = String(date.getDate()).padStart(2, '0');
            var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = date.getFullYear();
            date = yyyy + '/' + mm + '/' + dd;
            var dateToEcho = dd + '/' + mm + '/' + yyyy;
            var submit = $('.boutton-post-video').val();
            $(".heures-dispo").load("searchHeuresProcess.php", {
                date: date,
                dateToEcho: dateToEcho,
                submit: submit
            });
        });
    });
</script>
<?php
require('admin-header.php');
$dateval = date(0);
?>
<div id="section-videos">
    <h1> Postez vos disponibilités sur le site ! </h1>
    <div class="form">
        <form action="#" method="POST" enctype="multipart/form-data" class='form-dispos'>
            <input style='text-align: center;' type="text" id="datepicker" onkeydown="return false" name='date-indiv' class='date-indiv' value="<?php if(isset($_GET['lastDate'])){ echo $_GET['lastDate'];}else{echo date('Y-m-d'); }?>">
            <!-- <input type="submit" name="Submit" class="boutton-post-video" required> -->
        </form>
    </div>

    <div class="heures-dispo"></div>
</div>
</body>
</html>

<!-- Pickaday script -->
<script src='../JS/datepick2.js?v=<?php echo time();?>'></script>