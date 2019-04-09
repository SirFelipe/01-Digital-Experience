<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php
    $variavel_externa = "fora";

    function teste(){

      global $variavel_externa;

      $variavel_externa = "dentro";
      $variavel_interna = "local";
    }

    echo $variavel_externa;
    echo "<br>";

    teste();
    echo $variavel_externa;

 ?>

  </body>
</html>
