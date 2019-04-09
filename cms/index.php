<!-- DATABASE -->
<?php include "includes/db.php"; ?>
<!-- HEADER -->
<?php include "includes/header.php";?>
<!-- NAVIGATION -->
<?php include "includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <?php
                  $query = "SELECT * FROM T_POST";
                  $select_posts = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_posts)){
                    $nm_titulo = $row['nm_titulo'];
                    $nm_autor = $row['nm_autor'];
                    $dt_post = $row['dt_post'];
                    $ds_conteudo = $row['ds_conteudo'];
                    $img_post = $row['img_post'];
                    $ds_tags = $row['ds_tags'];
                    
                    $dt_post = date('d-m-Y', strtotime($dt_post));
                ?>

                <h2>
                  <a href="#"><?php echo $nm_titulo; ?></a>
                </h2>
                <p class="lead">
                  por
                  <a href="index.php"><?php echo $nm_autor; ?></a></p>
                  <p><span class="glyphicon glyphicon-time"></span> Postado em <?php echo $dt_post; ?></p>
                  <hr>
                  <img class="img-responsive" src="img/<?php echo $img_post; ?>" alt="">
                  <p><?php echo $ds_conteudo; ?></p>
                  <a class="btn btn-primary" href="#">Leia Mais<span class="glyphicon glyphicon-chevron-right"></span></a>
                  <hr>
                  <?php } ?>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php";?>
        </div>
        <!-- /.row -->

        <hr>
        <!-- FOOTER -->
        <?php include "includes/footer.php";?>
