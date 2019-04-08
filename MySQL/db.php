<?php
    $connect = mysqli_connect('localhost', 'root', 'labfiap$2018', 'exemplo');

    if(!$connect){
      echo 'Erro ao conectar ao banco de dados.';
    }

 ?>
