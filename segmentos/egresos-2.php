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
        $sql = "SELECT pregunta2 FROM costos WHERE id_costos=" . $id_costos;
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result, MYSQL_ASSOC);
        $respuesta = $row['pregunta2'];
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
                <form action="set_costs2.php" method="post">
                    <div class="cont-center">
                        <h3>¿A cuánto estiman tus costos variables?  </h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Para elaborar 100 frascos de mermelada se necesita: Fruta orgánica: 25kg x $50pesos el kilo = $1,250.00, sustituto de azúcar: 10kg x $ 9pesos el kilo =$90.00, envase de vidrio artesanal $10.00 x 1000 productos = 10,000.</p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
                <div class="col-md-2">
                  <div class="circle">
                    <p><span class="circle-2"></span></p>
                    <p><span class="circle-1"></span></p>
                  </div>
              </div>
        </div>
    </div>
    <?php include("../modules/segmentos-footer.php"); ?>
  </body>
</html>