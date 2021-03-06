<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    }
?>
<?php 
    include_once('bd/inicializar.php');
    $id_user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="head">
         <div class="info-left"><a href="create.php">Crear nuevo proyecto</a></div>
         <div class="info-right"><a href="logout.php">salir</a></div>
     </div>
      <div class="container">
           <div class="add">
              <div class="add-info-sup">
               <h3>Proyectos</h3>
                <p>Comienza a conocer tu mercado y a validar tu idea.</p>
              </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                        $proyectos = mysql_query("SELECT * FROM proyectos WHERE id_usuario = " . $id_user);
                        while ($query = mysql_fetch_array($proyectos, MYSQL_ASSOC)) {
                        ?>
                        <div class="col-md-4">
                         <div class="cont-add-pro">
                             <div class="col-md-12"><a href="delete_project.php?id_proyecto=<?php echo $query['id_proyecto'];?>" class="pull-right">Eliminar</a></div>
                          <h3><?php echo $query['nombre_proyecto']; ?></h3>
                          <p><?php echo $query['descripcion_proyecto']; ?></p>
                          <a href="get_project_canvas.php?id_proyecto=<?php echo $query['id_proyecto'];?>"><img src="images/btn.png" alt=""></a>
                      </div> 
                    </div>
                    <?php
                        }
                        mysql_close();
                    ?>
                </div>
            </div>
	</div> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>