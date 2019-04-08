<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

$string = "O  carnaval tá chegando!";

// Função que conta o número de caracteres
echo strlen($string);
echo "<br>";

// Função que converte todos os caracteres para maiúsculo
echo strtoupper($string);
echo "<br>";
// Função que converte todos os caracteres para minúsculo
echo strtolower($string);
echo "<br>";

if(!strstr($string, '!')){
  echo "Não tem ponto de exclamação na frase";
} else {
  echo "Tem ponto de exclamação!";
}


?>

  </body>
</html>
