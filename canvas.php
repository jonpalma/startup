<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_proyecto = $_SESSION['id_proyecto'];
    }
?>
<?php 
    include_once('bd/inicializar.php');
?>
<!DOCTYPE html>
<html lang="es">
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
    <!-- HTML5 shim and Respond.js for IE8 | of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container">
          <div class="head">
              <div class="info-left"></div>
              <div class="info-right"></div>
          </div>
           <div class="add">
              <div class="add-info-sup">
               <h3>Modelo Canvas</h3>
                <p>Comienza a conocer tu mercado y a validar tu idea.</p>
              </div>
            </div>
		</div>
   <div class="container">
       <div class="row">
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM clientes WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_clients_id.php?id_clientes=<?php echo $result['id_clientes']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-1.png" alt="">
                    <h3>Clientes</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM propuesta_valor WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_prop_id.php?id_propuesta_valor=<?php echo $result['id_propuesta_valor']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-2.png" alt="">
                    <h3>Propuesta de Valor</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM canales_dist WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_dist_id.php?id_canales_dist=<?php echo $result['id_canales_dist']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-3.png" alt="">
                    <h3>Canales de distribución</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
       </div>
       <div class="row">
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM actividades WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_activities_id.php?id_actividades=<?php echo $result['id_actividades']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-4.png" alt="">
                    <h3>Actividades Clave</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM relacion WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_rel_id.php?id_relacion=<?php echo $result['id_relacion']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-5.png" alt="">
                    <h3>Relación</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM flujo WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_revenue_id.php?id_flujo=<?php echo $result['id_flujo']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-6.png" alt="">
                    <h3>Flujo de efectivo</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
       </div>
       <div class="row">
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM recursos WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_resources_id.php?id_recursos=<?php echo $result['id_recursos']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-7.png" alt="">
                    <h3>Recursos Clave</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM alianzas WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_aliance_id.php?id_alianzas=<?php echo $result['id_alianzas']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-8.png" alt="">
                    <h3>Alianzas</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
           <div class="col-md-4">
               <?php
                    $sql = "SELECT * FROM costos WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
               <a href="get_costs_id.php?id_costos=<?php echo $result['id_costos']; ?>">
                    <div class="cont-add-canvas">
                    <img src="images/canvas-9.png" alt="">
                    <h3>Costos</h3>
                    <p>Aprende a crear el mercado al que va diriguido tu idea.</p>
                  </div> 
                </a> 
           </div>
           <div class="col-md-4"></div>
           <div class="col-md-4"><input class="btn btn-listo" value="Descarga tu proyecto" type="submit"></div>
           <div class="col-md-4"></div>
       </div>
    </div>
    <br><br><br><br>
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