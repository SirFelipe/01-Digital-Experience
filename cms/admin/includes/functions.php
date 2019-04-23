
<?php
//FUNÇÃO DE INSERIR CATEGORIA
function inserirCategoria(){
  global $connection;

  $nm_categoria = $_POST['nm_cat'];
  if(strlen($nm_categoria) <= 2){
    echo "Por favor, digite um nome válido";
  }else if($nm_categoria == ""){
    echo "Por favor, insira uma categoria.";
  }else{
    $query = "INSERT INTO T_CATEGORIA(nm_cat) VALUES ('$nm_categoria')";
    $resultado = mysqli_query($connection, $query);

    if(!$resultado){
      echo "Erro ao inserir categoria.";
    }else{
      echo "Categoria inserida com sucesso.";
    }
  }
}


//FUNÇÃO DE MOSTRAR CATEGORIAS
function mostrarDadosCategoria(){
  global $connection;

  $query = "SELECT * FROM T_CATEGORIA";
  $select_todas_categorias = mysqli_query($connection, $query);

  //TRAZENDO O NOME DAS CATEGORIAS DO DB COM ARRAY ASSOCIATIVO.
  while($row = mysqli_fetch_assoc($select_todas_categorias)){
      $nm_categoria = $row['nm_cat'];
      $id_cat = $row['id_cat'];
      /* foreach ($row as $key) { echo $key;}*/
      echo '<tr>';
      echo '<td>' . $id_cat . '</td>';
      echo '<td>' . $nm_categoria . '</td>';
      echo '<td class="text-center"><a class="fa fa-trash" href="categorias.php?delete=' . $id_cat . '"></a></td>';
      echo '<td class="text-center"><a class="fa fa-pencil" href="categorias.php?edit=' .  $id_cat . '"></a></td>';
      echo '</tr>';
  }
}

//FUNÇÃO DE APAGAR CATEGORIAS
function removerCategoria(){
  global $connection;

  $apaga_categoria = $_GET['delete'];

  $query = "DELETE FROM T_CATEGORIA WHERE id_cat = $apaga_categoria";
  $apagar = mysqli_query($connection, $query);

  //Ao clicar em apagar, ele redirecionará automaticamnete.
  header("Location: categorias.php");
}


 ?>
