<!-- DATABASE IMPORT -->
<?php include 'db.php';  ?>
<?php session_start(); ?>

<?php
  if(isset($_POST['login'])){
    global $connection;
    $nm_usuario = $_POST['nmUsuario'];
    $ds_senha = $_POST['dsSenha'];

    //TRATAMENTO SQL INJECTION
    

    $query = 'SELECT * FROM T_USUARIO';
    $select_usuario = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_usuario)){
      $db_user = $row['nm_usuario'];
      $db_pw = $row['ds_senha'];
      $db_nome = $row['nm_apelido'];
    }

    if($nm_usuario !== $db_user && $ds_senha !== $db_pw){
      header('Location: ../index.php');
    }elseif($nm_usuario == $db_user && $ds_senha == $db_pw){
      $_SESSION['nm_usuario'] = $db_user;
      $_SESSION['ds_senha'] = $db_pw;
      $_SESSION['nm_apelido'] = $db_nome;

      header('Location: ../admin');
    }
  }
 ?>
