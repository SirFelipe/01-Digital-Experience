<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php
  if(isset($_POST['enviar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $connection = mysqli_connect('localhost', 'root', 'labfiap$2018', 'desafio');
    if(!$connection){
      die('Vish deu ruim!');
    }

    // QUERY DE INSERCAO
    $query = "INSERT INTO usuario(username, password, email) VALUES('$username', '$password', '$email')";
    // EXECUTAR A QUERY
     $result = mysqli_query($connection, $query);
    // VALIDAR
    if($result){
      echo "Ae, foi";
    } else {
      echo "Não deu, falhou!";
    }
  }
 ?>

<div class="container">
  <div class="col-sm-6">

<form action="desafio_8.php" method="post">
  <div class="form-group">
    <label>Usuário</label>
    <input type="text" name="username" class="form-control">
  </div>

  <div class="form-group">
    <label>Senha</label>
    <input type="password" name="password" class="form-control">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
  </div>

  <input type="submit" class="btn btn-secondary" name="enviar" value="ENVIAR">

  </div>
</div>
</form>

  </body>
</html>
