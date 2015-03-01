<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_flujo = $_SESSION['id_flujo'];
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
        $sql = "SELECT pregunta1 FROM flujo WHERE id_flujo=" . $id_flujo;
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
                    <img src="../images/canvas-6.png" alt="">
                    <h3>Ingresos</h3>
                    <p>Los ingresos son las diferentes formas en que vas a generar ganancias para el negocio, ya sea por producto, cliente, servicio, a comisión, crédito, etc.  </p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="set_revenue1.php" method="post">
                    <div class="cont-center">
                        <h3>¿Cuáles son tus tipos de ingresos?</h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Pago con tarjeta o de contado al igual que venta por mayoreo con sistema de crédito para distribuidores.   </p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
                <div class="col-md-2">
                  <div class="circle">
                    <p><span class="circle-1"></span></p>
                  </div>
              </div>
        </div>
    </div>
    <?php include("../modules/segmentos-footer.php"); ?>
  </body>
</html>