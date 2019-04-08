<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
      if(isset($_GET['enviar'])){
          // echo "Oba deu certo";
          $nome = $_GET['nome'];
          $disciplina = $_GET['disciplina'];
          $nac = $_GET['nac'];
          $ps = $_GET['ps'];
          $am = $_GET['am'];
          $media = ($nac*0.2)+($am*0.3)+($ps*0.5);

          echo '<div class="alert alert-warning" role="alert">'. $nome . " sua média é: " . $media . " em: " . $disciplina '</div>';
      }


     ?>
    <div class="container">
      <h2 class="text-center">DESAFIO 10 - BOLETIM</h2>
        <form class="form" action="desafio_10-boletim.php" method="get">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome:" class="form-control">
          </div>

          <select name="disciplina">
            <option value="Empreendedorismo" name="1">Empreendedorismo</option>
            <option value="Inovação Disruptiva" name="2">Inovação Disruptiva</option>
            <option value="Digital Experience Platform" name="3">DEP</option>
          </select>
          <div class="form-group">
            <label for="disciplina">Disciplina</label>
            <input type="text" name="disciplina" placeholder="Digite o nome da disciplina:" class="form-control">
          </div>
          <div class="form-group">
            <label for="nac">NAC</label>
            <input type="number" name="nac" placeholder="Digite a nota da NAC:" class="form-control">
          </div>
          <div class="form-group">
            <label for="ps">PS</label>
            <input type="number" name="ps" placeholder="Digite a nota da PS:" class="form-control">
          </div>
          <div class="form-group">
            <label for="am">AM</label>
            <input type="number" name="am" placeholder="Digite a nota do AM" class="form-control">
          </div>
          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="enviar" value="ENVIAR">          </div>
        </form>

    </div>
  </body>
</html>
