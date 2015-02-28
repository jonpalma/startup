<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" el="stylesheet">
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
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
              <div class="head">
                  <div class="info-left"></div>
                  <div class="info-right"></div>
              </div>
               <div class="add-create">
                  <div class="add-info-sup">
                   <h3><Proye></Proye>Mi primer idea</h3>
                    <p>Ingresa el nombre y una breve pero buena descripción de tu idea.</p>
                  </div>
                   <form action="agregar-proyecto.php" method="post">
                          <div class="cont-add">
                              <p>Nombre de mi idea.</p>
                              <input class="input-create" type="text" name="project_name" placeholder="Mi idea">
                              <p>Nombre de mi idea.</p>
                              <input class="input-create-txt" type="text" name="project_description" placeholder="Mi idea">
                              <input type="submit" class="btn btn-listo" value="LISTO">
                          </div>
                      </form>               
                </div>
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