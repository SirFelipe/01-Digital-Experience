<?php

  //BOAS PRÁTICAS DE MERCADO PARA PHP - ARRAY ASSOCIATIVO
  $db['db_host'] = "localhost";
  $db['db_user'] = "root";
  $db['db_pass'] = "labfiap$2018";
  $db['db_name'] = "cms";

  foreach ($db as $key => $value) {
    //FUNÇÃO
    define(strtoupper($key),$value);
  }

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if(!$connection){
    echo "Erro ao se conectar com o banco de dados";
  }
 ?>
