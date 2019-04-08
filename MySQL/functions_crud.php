<?php include "db.php"; ?>
<?php
  function inserirDados(){
    global $connect;

    $username = $_POST['username'];
    $password = $_POST['password'];

    //  echo $username . '<br>';
    //  echo $password;

    // QUERY, PARA INSERIR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
    $query = "INSERT INTO t_usuario(nm_usuario, ds_senha) VALUES ('$username', '$password')";

    // FUNÇÃO QUE EXECUTA QUERIES
    $resultado = mysqli_query($connect, $query);

    // VALIDAÇÃO
    if(!$resultado){
      echo "<script>alert('Erro ao inserir dados.');</script>";
    } else {
      echo "<script>alert('Dados criados com sucesso.');</script>";
    }
  }

  function lerDados(){
    global $connect;
    // QUERY, PARA LER OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS
    $query = "SELECT * FROM t_usuario";
    // FUNÇÃO QUE EXECUTA QUERIES
    $resultado = mysqli_query($connect, $query);

    while($row = mysqli_fetch_assoc($resultado))
    {
      print_r($row);
    }
  }

  function mostraDados(){
    global $connect;
    $queryUsuarios = "SELECT * FROM t_usuario";
    $resultUsuarios = mysqli_query($connect, $queryUsuarios);
    while($row = mysqli_fetch_assoc($resultUsuarios)){
        $id = $row['id_usuario'];
        echo "<option value='$id'>$id</option>";
    }
  }

  function atualizaTabela(){
    global $connect;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    // QUERY, PARA ATUALIZAR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
    $query = "UPDATE t_usuario SET nm_usuario = '$username', ds_senha = '$password' WHERE id_usuario = $id";

    // FUNÇÃO QUE EXECUTA QUERIES
    $resultado = mysqli_query($connect, $query);

    // VALIDAÇÃO
    if(!$resultado){
      echo "Erro ao atualizar os dados.";
    } else {
      echo '<div class="alert alert-success" role="alert">Dados atualizados com sucesso.</div>';
    }
  }

  function deletaDados(){
    global $connect;

    $id = $_POST['id'];

    //$query = "DELETE FROM t_usuario where $id"
    $query = "DELETE FROM t_usuario WHERE id_usuario = $id";
    $resultado = mysqli_query($connect, $query);

    if(!$resultado){
      echo "Erro ao deletar os dados.";
    }else {
      echo "Dados removidos com sucesso.";
    }
  }
?>
