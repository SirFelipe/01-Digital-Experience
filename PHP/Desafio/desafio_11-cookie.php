<?php
  //VERIFICANDO SE O COOKIE ESTÁ DEFINIDO
  if(!isset($_COOKIE['CookieChocolate'])){
      echo "Você nunca passou por aqui";
  }else{
      $nomeCookie = $_COOKIE['CookieChocolate'];
      echo $nomeCookie;
      echo "<br>";
      echo "Bem-vindo de volta.";
  }
?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
     <?php
       //Função setcookie() possui 3 parâmetros;
       // - NOME
       // - VALOR
       // - TEMPO DE EXPIRAÇÃO
       $nome = "CookieChocolate";
       $valor = 100;
       //60 * 60 = 1 HORA, * 24 UM DIA * 7 DIAS
       $expira = time() + (((60 * 60) * 24) * 7);
       setcookie($nome, $valor, $expira);
      ?>


  </body>
</html>
