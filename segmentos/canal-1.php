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
        $sql = "SELECT pregunta1 FROM canales_dist WHERE id_canales_dist=" . $id_canales_dist;
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result, MYSQL_ASSOC);
        $respuesta = $row['pregunta1'];
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
                <form action="set_channel1.php" method="post">
                    <div class="cont-center">
                        <h3>¿Cuáles son los canales de comunicación con los clientes?</h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Teléfono, medios de comunicación, degustaciones y demostraciones en áreas públicas. </p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
                <div class="col-md-2">
                  <div class="circle">
                    <p><span class="circle-1"></span></p>
                    <p><span class="circle-2"></span></p>
                    <p><span class="circle-2"></span></p>
                    <p><span class="circle-2"></span></p>
                    <p><span class="circle-2"></span></p>
                  </div>
              </div>
        </div>
    </div>
    <?php include("../modules/segmentos-footer.php"); ?>
  </body>
</html>