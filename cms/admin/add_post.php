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
                            <small>adicionar novo post</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Adicionar novo Post
                            </li>
                        </ol>
                        <div class="col-sm-12">
                          <?php
                            adicionarPost();
                           ?>
                          <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="">Título do Post</label>
                              <input type="text" class="form-control" name="post_titulo" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="">Autor</label>
                              <input type="text" class="form-control" name="post_autor" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="">Imagem do post</label>
                              <input type="file" class="form-control" name="post_imagem" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="">Conteúdo</label>
                              <textarea type="text" class="form-control" name="post_conteudo" cols="30" rows="10" placeholder="Digite o conteúdo do post"></textarea>
                            </div>

                            <div class="form-group">
                              <input type="submit" class="btn btn-primary" name="adicionar" value="Adicionar">
                            </div>
                          </form>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>
