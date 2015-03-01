<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_recursos = $_SESSION['id_recursos'];
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
        $sql = "SELECT pregunta1 FROM recursos WHERE id_recursos=" . $id_recursos;
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
                    <img src="../images/canvas-7.png" alt="">
                    <h3>Recursos Clave</h3>
                    <p>Describe los activos más importantes para que el negocio funcione: Físicos, económicos, intelectuales y humanos. 
 </p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="set_resources1.php" method="post">
                    <div class="cont-center">
                        <h3>¿Tienes recursos físicos, como instalaciones equipo o maquinaria, que es indispensable para funcionar? </h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Una despulpadora, cortadora de frutas y una autoclave para sellado. </p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
                <div class="col-md-2">
                  <div class="circle">
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