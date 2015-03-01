<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_relacion = $_SESSION['id_relacion'];
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
        $sql = "SELECT pregunta2 FROM relacion WHERE id_relacion=" . $id_relacion;
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
                    <img src="../images/canvas-5.png" alt="">
                    <h3>Relaciones con el cliente</h3>
                    <p>como se define el tipo de relación que se quiere establecer con los clientes. 
<br><br>
Los tipos de relación son los siguientes:<br><br>

a) Asistencia personal.- Comunicación directa con el cliente (teléfono, e-mail, personal, etc.)<br><br>
b) Autoservicio.- Relación indirecta, pero existen medios complementarios para que los clientes se atiendan a sí mismos. (Manuales de instrucciones, preguntas frecuentes, etc.)<br><br>
c) Comunidades.- Promover la creación de una comunidad para entender mejor a los clientes y que ellos interactuen entre sí (Blog, chat, etc.)<br><br>
d) Co-creación.- Involucra la interacción del cliente con la propuesta de valor (Sugerencias) </p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="set_rel2.php" method="post">
                    <div class="cont-center">
                        <h3>¿Qué estrategías se utilizarán para mantener a los clientes?</h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Llamar periódicamente a nuestros distribuidores para obtener información sobre el que tanto se está desplazando el producto en el mercado.  </p>
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