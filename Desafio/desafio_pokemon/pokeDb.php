<?php
  $connect = mysqli_connect('localhost','root','labfiap$2018','desafio');

  if(!$connect){
    echo 'Erro ao conectar ao banco de dados.';
  }
?>
