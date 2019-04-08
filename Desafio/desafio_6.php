<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php
      function sorteioMega(){
        // Sorteando 6 números
        for($i = 1; $i <= 6; $i++){
          $n[] = rand(1, 60);
        }
        // Colocando em Ordem Crescente:
        sort($n);
        // Exibir mensagem com números separados usando implode:
        echo "Os números da Mega-Sena são: " . implode(' - ', $n);
      }

      sorteioMega();

?>

  </body>
</html>
