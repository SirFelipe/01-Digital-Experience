
<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
    <!-- Login well -->
    <div class="well">
        <h4>Login</h4>
        <form action="includes/login.php" method="post">
          <div class="form-group">
            <input type="text" name="nmUsuario" class="form-control" placeholder="Digite o nome do usuário">
          </div>
          <div class="form-group">
            <input type="password" name="dsSenha" class="form-control" placeholder="Digite sua senha">
          </div>
          <button type="submit" name="login" class="btn btn-primary">Entrar</button>
        </form>
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                  <?php
                    $query = "SELECT * FROM T_CATEGORIA";
                    $select_categorias = mysqli_query($connection, $query);

                    //TRAZENDO O NOME DAS CATEGORIAS DO DB COM ARRAY ASSOCIATIVO.
                    while($row = mysqli_fetch_assoc($select_categorias)){
                      $nm_categoria = $row['nm_cat'];
                      /* foreach ($row as $key) { echo $key;}*/
                      echo '<li><a href="#">' . $nm_categoria . '</a></li>';
                    }
                   ?>
                </ul>
            </div>
            <!-- /.col-lg-6
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                </ul>
            </div>
            -->
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
</div>
