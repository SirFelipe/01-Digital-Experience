<?php ob_start(); ?>
<?php include "../includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
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
                            Posts
                            <small>ver todos os posts</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Posts
                            </li>
                        </ol>

                          <div class="col-sm-12">

                            <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Título</th>
                                  <th>Autor</th>
                                  <th>Imagem</th>
                                  <th>Data</th>
                                  <th>Conteúdo</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php mostrarDadosPost();?>
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

  <?php include "includes/footer.php"; ?>
