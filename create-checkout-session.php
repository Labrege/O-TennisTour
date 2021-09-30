<?php
if(isset($_POST['submit-pay'])){

  //Variables
  $amount = $_POST['amount'];
  $name = $_POST['clientname'];
  $surname = $_POST['clientsurname'];
  $tel = $_POST['clienttel'];
  $mail = $_POST['clientmail'];
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
  $age = $_POST['client-age'];
  $localisation1 = $_POST['client-localisation-1'];
  $localisation2 = $_POST['client-localisation-2'];  


  require 'vendor/autoload.php';
  \Stripe\Stripe::setApiKey('sk_test_51JeKanC0wJvQStrM1E5hZf736sLysewAGej9P0zGH79tPdMgSbywBVHjONEPu8g55G3H7kQXNTAkt87pyiNNDhj800LvYoxlNu');

  header('Content-Type: application/json');
  $price = "$amount";
  /*$YOUR_DOMAIN = 'http://localhost/O-tennisTour';*/
  $YOUR_DOMAIN = 'https://www.otennistour.com/';
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
    'success_url' => $YOUR_DOMAIN . "/success-payement.php?amount=$amount&name=$name&surname=$surname&tel=$tel&mail=$mail&condition=$condition&surface=$surface&age=$age&localisation1=$localisation1&localisation2=$localisation2",
    'cancel_url' => $YOUR_DOMAIN . '/cours-individuels.php',
  ]);

  header("HTTP/1.1 303 See Other");
  header("Location: " . $checkout_session->url);
}else{
  ('Location: ../cours-individuels.php');
}
