<?php include "db.php"; ?>
<?php include "functions_crud.php"; ?>
<?php
  if(isset($_POST['update'])){
    atualizaTabela();
  }
?>
<?php include 'header.php'; ?>
    <div class="container">
      <div class="col-sm-6">
        <form action="login_update.php" method="post">
          <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="username" class="form-control">
          </div>

          <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control">
          </div>
          <select name="id">
            <?php
              mostraDados();
            ?>
            </option>
          </select>
          <input class="btn btn-primary" type="submit" name="update" value="ATUALIZAR">
          <?php include 'buttons.php'; ?>
        </form>
      </div>
<?php include 'footer.php'; ?>
