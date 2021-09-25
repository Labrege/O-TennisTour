<header>
  <?php
      require 'header.php'
  ?>
</header>
<?php
if(isset($_POST['time-select']) && isset($_POST['date']) && isset($_POST['profEtape2'])){
    echo $_POST['date'];
    echo $_POST['time-select'];
    echo $_POST['profEtape2'];
}
else{
  header('Location: cours-individuels.php');
}
