<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

  function somar($x, $y){
    return $x + $y;
  }

  function subtrair($x, $y){
    return $x - $y;
  }

  function multiplicar($x, $y){
    return $x * $y;
  }

  function dividir($x, $y){
    return $x / $y;
  }

  function contaMaluca($x, $y, $z){
    return ($x + $y) * $z;
  }


  echo somar(12, 6) . "<br>";
  echo subtrair(45, 6) . "<br>";
  echo multiplicar(4, 5) . "<br>";
  echo dividir(10, 5) . "<br>";

  echo contaMaluca(5, 2, 7);



?>

  </body>
</html>
