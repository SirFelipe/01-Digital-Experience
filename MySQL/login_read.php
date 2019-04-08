
<?php include "db.php"; ?>
<?php include "functions_crud.php"; ?>
<?php include 'header.php'; ?>
    <div class="container">
      <div class="col-sm-6">
        <pre>
          <?php
            lerDados();
          ?>
        </pre>
        <?php include 'buttons.php'; ?>
      </div>
<?php include 'footer.php'; ?>
