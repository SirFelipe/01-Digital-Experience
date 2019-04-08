<?php include 'pokeDb.php'; ?>
<?php include 'desafio_09_functions.php'; ?>
<?php
  if(isset($_POST['delete'])){
    deletaPokemon();
  }
 ?>

 <?php include 'pokeHeader.php'; ?>
 <div class="container">
   <div class="col-sm-6">
     <form action="pokemon_delete.php" method="post">
       <div class="form-group">
         <label>Nome</label>
         <input type="text" name="nome" class="form-control">
       </div>
       <div class="form-group">
         <label>Tipo</label>
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
       <input class="btn btn-primary" type="submit" name="delete" value="REMOVER">
       <?php include 'buttons.php'; ?>
     </form>
   </div>
