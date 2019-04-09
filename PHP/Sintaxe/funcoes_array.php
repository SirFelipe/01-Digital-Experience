<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

$lista = [3, 54, 6565, 89, 54, 12, 5];
// Função que exibe o maior número do array
echo max($lista);
echo "<br>";
// Função que exibe o menor número do array
echo min($lista);
echo "<br>";
// Ordem crescente
sort($lista);
// Função que imprime o meu array inteiro
print_r($lista);
?>

  </body>
</html>
