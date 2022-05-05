<?php
  require('includes/dbh.inc.php');
  $searchKey = $conn->query("SELECT * FROM valeurs WHERE id='1'");
  if($searchKey->num_rows > 0){
    //Tant qu'il y a des résultat dans la table, afficher...
    while ($donnees = $searchKey->fetch_assoc()){
      $APIKEY = $donnees['value'];
    }
  }
  //Variables
  echo $name = $_POST['clientname'];
  echo $surname = $_POST['clientsurname'];
  echo $tel = $_POST['clienttel'];
  echo $mail = $_POST['clientmail'];
  if(isset($_POST['client-condition'])){
    $condition = $_POST['client-condition'];
  }
  else{
    $condition = 'int';
  }
  if(isset($_POST['client-surface'])){
    $surface = $_POST['client-surface'];
  }
  else{
    $surface = 'aucun-choix';
  }
  echo $age = $_POST['client-age'];
  echo $localisation1 = $_POST['client-localisation-1'];
  echo $localisation2 = $_POST['client-localisation-2'];

  echo $prof = strtolower($_GET['prof']);
  echo $profEmail = $_GET['profEmail'];
  echo $timepicked = $_GET['time'];
  echo $statutprof = $_GET['statut'];
  echo $date = $_GET['date'];
  require 'vendor/autoload.php';
  \Stripe\Stripe::setApiKey("$APIKEY"); 

  header('Content-Type: application/json');
  $amount = $_POST['amount'];
  $price = "'$amount'";
  // $YOUR_DOMAIN = 'http://localhost/O-tennisTour';
  $YOUR_DOMAIN = 'https://www.otennistour.com';
  $checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
      # TODO: replace this with the `price` of the product you want to sell
      'currency' => 'eur',
      'amount' => $amount,
      'name' => 'Leçon individuelle OTT',
      'quantity' => 1,
    ]],
    'payment_method_types' => [
      'card',
    ],
    'mode' => 'payment',
    'allow_promotion_codes' => true,
    'success_url' => $YOUR_DOMAIN . "/success-payement.php?prof=$prof",
    'cancel_url' => $YOUR_DOMAIN . '/cours-individuels.php',
  ]);

  header("HTTP/1.1 303 See Other");
  header("Location: " . $checkout_session->url);
  ?>

<!-- amount=$amount&name=$name&surname=$surname&tel=$tel&mail=$mail&condition=$condition&surface=$surface&age=$age&localisation1=$localisation1&localisation2=$localisation2&time=$timepicked&profEmail=$profEmail&statutprof=$statutprof -->