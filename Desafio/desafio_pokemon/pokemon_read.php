<?php include "pokeDb.php"; ?>
<?php include "desafio_09_functions.php"; ?>
<?php
  if(isset($_post['enviar'])){
    inserirPokemon();
  }
?>

<?php include 'pokeHeader.php'; ?>
<div class="container">
  <div class="col-sm-6">
    <pre>
      <?php
        exibirFogo();
      ?>
    </pre>
    <?php include "pokeButtons.php"; ?>
  </div>
<?php include "../footer.php"; ?>
