<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_actividades = $_SESSION['id_actividades'];
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
        $sql = "SELECT pregunta1 FROM actividades WHERE id_actividades=" . $id_actividades;
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
                    <img src="../images/canvas-1.png" alt="">
                    <h3>Actividades Clave</h3>
                    <p>Cualquier modelo de negocio se basa en ciertas actividades que son clave para su funcionamiento. Las principales actividades clave residen en los procesos de producción, mantener relaciones y el llevar tu producto hasta tu cliente. Recuerda que para determinar que una actividad es clave, esta tiene que ser tan necesaria a su modo de que sin ella, tu modelo de negocios no funcionaría. 
 </p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="set_activities1.php" method="post">
                    <div class="cont-center">
                        <h3>¿Cuáles son los procesos más importantes para hacer tu producto o dar tu servicio?  </h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Validación que la fruta sea orgánica, la preparación de la mermelada cubre con las normas de salubridad  necesarias y  la producción cumple los estándares de bajo en azúcar.  </p>
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