<?php
  if(isset($_GET['edit'])){

    $id_cat = $_GET['edit'];

    $query = "SELECT * FROM T_CATEGORIA WHERE id_cat = $id_cat";
    $select_todas_categorias = mysqli_query($connection, $query);

    //TRAZENDO O NOME DAS CATEGORIAS DO DB COM ARRAY ASSOCIATIVO.
    while($row = mysqli_fetch_assoc($select_todas_categorias)){
        $nm_categoria = $row['nm_cat'];
        $id_cat = $row['id_cat'];
    }

  }
?>

<form action="" method="post">
  <div class="form-group">
    <label for="nm_cat">Editar categoria</label>
    <input type="text" class="form-control" name="nm_cat" value="<?php if(isset($nm_categoria)){echo $nm_categoria;}?>"/>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="atualizar" value="Atualizar">
  </div>
</form>

<hr>

<?php
  
  if(isset($_POST['atualizar'])){
    $edita_nm_cat = $_POST['nm_cat'];
    $query = "UPDATE T_CATEGORIA SET nm_cat = '$edita_nm_cat' WHERE id_cat = $id_cat";

    mysqli_query($connection, $query);
  }
?>
