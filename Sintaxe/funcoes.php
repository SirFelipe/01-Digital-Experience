<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

  function digaAlgo() {
   echo "Ontem o Corinthians perdeu! :(";
  }

//  digaAlgo();

  function calculadora(){
    echo 456 + 345;
  }
//  calculadora();

  function init(){
    digaAlgo();
    echo "<br>";
    calculadora();
  }

  init();



?>

  </body>
</html>
