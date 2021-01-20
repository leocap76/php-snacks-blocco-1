<?php
  // commento PHP
  // $nome = $_GET["nome"];
  // $cognome = $_GET["cognome"];
  //
  // $nome = "leonardo";
  // $cognome = "capogna";
  //
  // $badWord = "dolor";
  //
  // echo str_replace($badWord, "***", $text);
  //
  // $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  // $arrayText = explode(",", $text);

// _________________________________________________________
//   PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i
// quali rappresentano delle partite di basket di
// un’ipotetica tappa del calendario. Ogni array della
// partita avrà una squadra di casa e una squadra
// ospite, punti fatti dalla squadra di casa e punti fatti
// dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo
// schema:
// Olimpia Milano - Cantù | 55 - 60
// _________________________________________________________


$arrayPartiteBasket = [
  [
    "Home" => "Banco di Sardegna Sassari",
    "Visitor" => "A|X Armani Exchange Milano",
    "HomePoints" => 102,
    "VisitorPoints" => 87,
  ],
  [
    "Home" => "Openjobmetis Varese",
    "Visitor" => "Vanoli Basket Cremona",
    "HomePoints" => 65,
    "VisitorPoints" => 90,
  ],
  [
    "Home" => "Carpegna Prosciutto Pesaro",
    "Visitor" => "De' Longhi Treviso Basket",
    "HomePoints" => 101,
    "VisitorPoints" => 95,
  ],
  [
    "Home" => "Allianz Pallacanestro Trieste",
    "Visitor" => "Germani Brescia",
    "HomePoints" => 67,
    "VisitorPoints" => 79,
  ],
  [
    "Home" => "Dolomiti Energia Trentino",
    "Visitor" => "UNAHOTELS Reggio Emilia",
    "HomePoints" => 85,
    "VisitorPoints" => 90,
  ],

];

// var_dump($arrayPartiteBasket);
 // echo ["squadra di casa"] . " " . ["squadra ospite"];

 $results = "";

 for($i = 0; $i < count($arrayPartiteBasket); $i++){
   $results .= $arrayPartiteBasket[$i]["Home"] . " - " . $arrayPartiteBasket[$i]["Visitor"] . " | ". $arrayPartiteBasket[$i]["HomePoints"] . " - ". $arrayPartiteBasket[$i]["VisitorPoints"] . "<br>" . "<br>";
 };

 ?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>snack-1</title>
  </head>
  <body>
    <?php echo $results; ?>

  </body>

</html>

<!-- ESEMPI -->
<!-- <h1>Nome completo: <?php echo $nome . " " . $cognome; ?></h1>  STAMPA CON CONCATENAZIONE TRAMITE "."
<h2>Nome: <?php echo $nome; ?></h2>       STAMPA SOLO NOME
<h2>Cognome: <?php echo $cognome; ?></h2>  STAMPA SOLO COGNOME
<p>Variabile GET: <?php echo $_GET["nome"]; ?></p>  STAMPA CON RICHIAMO A VARIABILE
<p><?php var_dump($arrayText); ?></p>   STAMPA ARRAY
<h4><?php echo trim($arrayText[1]); ?></h4>  STAMPA SECONDO ELEMENTO IN ARRAY ( 0, "1", 2...)
<?php echo str_replace("dolor", "***", $text); ?>  SOSTITUISCI IN "TEXT" LA PRIMA PAROLA(DOLOR) CON LA SECONDA (***)
<p>Lunghezza stringa: <?php echo strlen($text); ?></p>
<h5><?php echo ucwords($text); ?></h5> -->
  <!-- for($i = 0; $i < count($array); $i++)    CICLO FOR, COUNT = .LENGHT -->
<!-- /ESEMPI -->
