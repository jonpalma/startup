<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_canales_dist = $_SESSION['id_canales_dist'];
    }
?>
<?php 
    include_once('../bd/inicializar.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php 
        include("../modules/segmentos-head.php");
        $sql = "SELECT pregunta3 FROM canales_dist WHERE id_canales_dist=" . $id_canales_dist;
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result, MYSQL_ASSOC);
        $respuesta = $row['pregunta3'];
        mysql_close();
    ?>
  </head>
  <body>
      <?php include("../modules/menu-sup.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="cont-left">
                    <img src="../images/canvas-3.png" alt="">
                    <h3>Canales de distribución</h3>
                    <p>Modo en que la empresa se comunica con los diferentes segmentos de mercado para llegar  a sus clientes y les proporciona una solución, los canles tienen tres funciones principales: comunicación, distribución y soporte postventa. </p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="set_channel3.php" method="post">
                    <div class="cont-center">
                        <h3>¿Cuál es más efectiva?</h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Degustación, porque aparte de retroalimentarnos nos hace generar una venta, ya que prueban el producto y se lo llevan en el momento.</p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
                <div class="col-md-2">
                  <div class="circle">
                    <p><span class="circle-2"></span></p>
                    <p><span class="circle-2"></span></p>
                    <p><span class="circle-1"></span></p>
                    <p><span class="circle-2"></span></p>
                    <p><span class="circle-2"></span></p>
                  </div>
              </div>
        </div>
    </div>
    <?php include("../modules/segmentos-footer.php"); ?>
  </body>
</html>