<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_costos = $_SESSION['id_costos'];
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
        $sql = "SELECT pregunta1 FROM costos WHERE id_costos=" . $id_costos;
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
                    <img src="../images/canvas-9.png" alt="">
                    <h3>Egresos</h3>
                    <p>Los egresos son los costos de la operación de tu negocio, estos se dividen en costos fijos y variables.
Costos fijos.- Son aquellos que no dependen de la producción (Servicios básicos agua, luz, teléfono, renta, etc.)
Costos variables.- Son los que dependen de la producción (comisiones de venta, costo de materia prima, etc.)
 </p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="set_costs1.php" method="post">
                    <div class="cont-center">
                        <h3>¿A cuánto estiman tus costos fijos mensuales? (recuerda incluir todos los servicios de agua, luz, teléfono, etc. Es importante conocerlos a detalle ya que más adelante tendrás que describirlos) </h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Costos fijos: Agua $ 500.00, Luz $2,000.00, teléfono e internet $600.00, renta $6,000.00 sueldo de dos empleados $12,000. </p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
                <div class="col-md-2">
                  <div class="circle">
                    <p><span class="circle-1"></span></p>
                    <p><span class="circle-2"></span></p>
                  </div>
              </div>
        </div>
    </div>
    <?php include("../modules/segmentos-footer.php"); ?>
  </body>
</html>