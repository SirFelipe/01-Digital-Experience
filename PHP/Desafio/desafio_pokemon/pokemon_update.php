<?php include "pokeDb.php"; ?>
<?php include "desafio_09_functions.php"; ?>
<?php
  if(isset($_POST['update'])){
    atualizaPokemon();
  }
 ?>
<?php include 'pokeHeader.php' ?>
<div class="container">
  <div class="col-sm-6">
    <form action="pokemon_update.php" method="post">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control">
      </div>

      <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" class="form-control">
      </div>
      <div class="form-group">
        <label for="hp">HP</label>
        <input type="text" name="hp" class="form-control">
      </div>
      <select name="id">
        <?php
          mostraPokemons();
        ?>
        </option>
      </select>
      <input class="btn btn-primary" type="submit" name="update" value="ATUALIZAR">
      <?php include 'pokeButtons.php'; ?>
    </form>
  </div>
<?php include '../footer.php'; ?>
