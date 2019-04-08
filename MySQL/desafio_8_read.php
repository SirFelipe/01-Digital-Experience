<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php
    $connection = mysqli_connect('localhost', 'root', 'labfiap$2018', 'desafio');
    if(!$connection){
      die('Vish deu ruim!');
    }
    // QUERY DE INSERCAO
    $query = "SELECT * FROM usuario";
    // EXECUTAR A QUERY
     $result = mysqli_query($connection, $query);
 ?>

<div class="container">
  <div class="col-sm-6">
    <?php
    while($row = mysqli_fetch_assoc($result)){
    echo "<pre>";
     echo $row['email'];
     echo "</pre>";
    }

    ?>
  </div>
</div>

  </body>
</html>
