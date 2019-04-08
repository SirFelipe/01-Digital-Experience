<?php include 'pokeDb.php'; ?>
<?php include 'desafio_09_functions.php' ?>
<?php
  if(isset($_POST['enviar'])){
    inserirPokemon();
  }
 ?>

 <?php include 'pokeHeader.php' ?>
 <div class="container">
   <div class="col-sm-6">
     <form action="pokemon_create.php" method="post">

       <div class="form-group">
         <label>Nome</label>
         <input type="text" name="pokeNome" class="form-control">
       </div>

       <div class="form-group">
         <label>Tipo</label>
         <input type="text" name="pokeTipo" class="form-control">
       </div>
       <div class="form-group">
         <label for="pokeHp">HP</label>
         <input type="range" min="0" max="100" value="0" step="1" onchange="showValue(this.value)" name="pokeHp" class="form-control">
        <span id="range">0</span>
        <script type="text/javascript">
          function showValue(newValue){
            document.getElementbyId('range').innerHTML=newValue;
          }
        </script>
       </div>
       <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
       <?php include 'pokeButtons.php'; ?>
     </form>
 <?php include '../footer.php';?>
