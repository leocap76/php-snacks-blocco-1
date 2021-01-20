<?php

// _________________________________________________________
// PHP Snack 2:
// Passare come parametri GET name, mail e age e
// verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti
// “Accesso negato”.
// _________________________________________________________

  $name = $_GET["name"];
  $minChar = 3;
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  $nameLength = strlen($name);

   // controllare che la lunghezza del nome superi quella richiesta
  if($nameLength < $minChar){
    $wrongLength = "Il nome è troppo corto, il minimo di caratteri è: $minChar";
  } else {
    $checkLength = TRUE;
  }
  // partire dal presupposto che gli elementi non ci siano, in caso contrario prenderla per valida
  if(strpos($mail, "@") == false || strpos($mail, ".") == false){
    $wrongMail = "L'email deve contenere: @ e .";
  } else {
    $mailCheck = TRUE;
  }
 // partire dal presupposto che l'età non sia un numero, in caso contrario prenderla per valida
  if(is_numeric($age) == false){
    $wrongAge = "Il valore che hai inserito non è un numero";
  } else {
    $ageCheck = TRUE;
  }

  if ($checkLength && $mailCheck && $ageCheck) {
    $allowed = "Accesso consentito";
  }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>snack-2</title>
  </head>
  <body>

          <?php echo $allowed; ?> <br>

          <?php echo $wrongLength; ?> <br>

          <?php echo $wrongMail; ?> <br>

          <?php echo $wrongAge; ?> <br>

  </body>

</html>
