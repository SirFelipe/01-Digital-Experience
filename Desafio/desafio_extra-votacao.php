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
      $total = $_POST['total'];
      $brancos = $_POST['brancos'];
      $nulos = $_POST['nulos'];
      $validos = $_POST['validos'];

      function eleitores($totalE, $votosB,$votosV,$votosN){
        $vb = ($votosB * 100)/$totalE;
        $vv = ($votosV * 100)/$totalE;
        $vn = ($votosN * 100)/$totalE;
        $array = [$vb,$vv,$vn];
        return $array;
      }

      //array de votos
      $votos = eleitores(1000,300,500,200);
      foreach ($votos as $v) {
        echo $v . '%' . "<br>";
      }
    }




     ?>

    <div class="container">
      <h2 class="text-center">DESAFIO EXTRA - VOTAÇÃO</h2>
        <form class="form" action="desafio_extra-votacao.php" method="post">
          <div class="form-group">
            <label for="total">Total de Eleitores</label>
            <input type="number" name="total" placeholder="Digite o total de eleitores:" class="form-control">
          </div>
          <div class="form-group">
            <label for="brancos">Brancos</label>
            <input type="number" name="brancos" placeholder="Digite o total de votos brancos:" class="form-control">
          </div>
          <div class="form-group">
            <label for="nulos">Nulos</label>
            <input type="number" name="nulos" placeholder="Digite o total de votos nulos:" class="form-control">
          </div>
          <div class="form-group">
            <label for="validos">Válidos</label>
            <input type="number" name="validos" placeholder="Digite o total de votos válidos:" class="form-control">
          </div>
          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="enviar" value="ENVIAR">
          </div>
        </form>
      </div>

  </body>
</html>
