<?php  include 'pokeDb.php';?>
<?php
  function inserirPokemon(){
    global $connect;

    $nome = $_POST['pokeNome'];
    $tipo = $_POST['pokeTipo'];
    $hp = $_POST['pokeHp'];

    $query = "INSERT INTO T_POKEMON(nm_pokemon, ds_tipo, ds_hitpoints) VALUES('$nome', '$tipo', $hp)";
    $resultado = mysqli_query($connect, $query);

    //VALIDAÇÃ
    if(!$resultado){
      echo "<script>alert('Erro ao inserir pokémon.');</script>";
    }else{
      echo "<script>alert('Sucesso ao adicionar na Pokedex');</script>";
    }
  }

  function exibirFogo(){
    global $connect;

    $tipo = "FOGO";

    $query = "SELECT * FROM T_POKEMON WHERE ds_tipo = $tipo";
    $resultado = mysqli_query($connect,$query);

    while($row = mysqli_fetch_assoc($resultado))
    {
      print_r($row);
    }
  }

  function mostraPokemons(){
    global $connect;
    $pokeQuery = "SELECT * FROM T_POKEMON";
    $pokeResult = mysqli_query($connect, $pokeQuery);
    while($row = mysqli_fetch_assoc($pokeResult)){
        $id = $row['id_pokemon'];
        echo "<option value='$id'>$id</option>";
    }
  }


  function atualizaPokemon(){
    global $connect;

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $hp = $_POST['hp'];
    $id = $_POST['id'];

    // QUERY, PARA ATUALIZAR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
    $query = "UPDATE pokemons SET ";
    $query .= "name = '$pokename', ";
    $query .= "type = '$tipo', ";
    $query .= "hp = $hp ";
    $query .= "WHERE ID = $id";
    //$query = "UPDATE T_POKEMON SET nm_pokemon = '$nome', ds_tipo = '$tipo', ds_hitpoints = '$hp' WHERE id_pokemon = $id";

    $resultado = mysqli_query($connect,$query);

    //VALIDAÇÃO
    if(!$resultado){
      echo "Erro ao atualizar os dados.";
    }else{
      echo '<div class="alert alert-success" role="alert">Dados atualizados com sucesso.</div>';
    }
  }

  function deletaPokemon(){
    global $connect;
    $id = $_POST['id'];
    $query = "DELETE FROM T_POKEMON WHERE id_pokemon = $id";
    $resulado = mysqli_query($connect,$query);
    //VALIDAÇÃO
    if(!$resultado){
      echo "Erro ao remover os dados.";
    }else{
      echo '<div class="alert alert-success" role="alert">Dados removidos com sucesso.</div>';
    }
  }
 ?>
