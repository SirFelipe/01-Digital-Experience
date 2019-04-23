<?php ob_start(); ?>

<!-- DATABASE -->
<?php include "../includes/db.php" ?>

<?php include "includes/functions.php" ?>

<!-- HEADER -->
<?php include "includes/header.php"; ?>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Seja bem-vindo
                            <small>Felipe</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Categorias
                            </li>
                        </ol>

                        <div class="col-sm-6">

                          <?php
                            if(isset($_POST['enviar'])){
                              inserirCategoria();
                            }

                           ?>

                          <form action="categorias.php" method="post">
                            <div class="form-group">
                              <label for="nm_cat">Adicionar categoria</label>
                              <input type="text" class="form-control" name="nm_cat" placeholder="Digite o nome da categoria:">
                            </div>
                            <div class="form-group">
                              <input type="submit" class="btn btn-outline-primary" name="enviar" value="Adicionar">
                            </div>
                          </form>

                          <hr>

                          <?php include "includes/editar_categoria.php" ?>
                        </div>
                        <!-- Fecha col-sm-6 -->
                        <div class="col-sm-6">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nome da Categoria</th>
                              </tr>
                            </thead>

                            <tbody>
                                <tr>
                                <?php mostrarDadosCategoria(); ?>


                                <?php
                                      if(isset($_GET['delete'])){
                                        removerCategoria();
                                      }
                                ?>

                              </tr>
                            </tbody>
                          </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <!-- FOOTER -->
        <?php include "includes/footer.php" ?>
