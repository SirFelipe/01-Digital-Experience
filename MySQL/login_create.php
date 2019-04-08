
<?php include "db.php"; ?>
<?php include "functions_crud.php"; ?>
<?php
  if(isset($_POST['enviar'])){
    inserirDados();
  }
?>

<?php include 'header.php';?>
<div class="container">
  <div class="col-sm-6">
    <form action="login_create.php" method="post">

      <div class="form-group">
        <label>Usuário</label>
        <input type="text" name="username" class="form-control">
      </div>

      <div class="form-group">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
      </div>
      <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
      <?php include 'buttons.php'; ?>
    </form>
<?php include 'footer.php';?>
