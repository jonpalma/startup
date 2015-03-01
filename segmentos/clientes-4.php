<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_clientes = $_SESSION['id_clientes'];
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
        $sql = "SELECT pregunta4 FROM clientes WHERE id_clientes=" . $id_clientes;
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result, MYSQL_ASSOC);
        $respuesta = $row['pregunta4'];
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
                    <h3>Clientes</h3>
                    <p>Los clientes son la base de tu modelo de negocios, son los grupos de personas o entidades a los que tu propuesta soluciona su necesidad o problema. <br><br>
                    En esta parte se definirá el perfil de tu cliente.</p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="set_client4.php" method="post">
                    <div class="cont-center">
                        <h3>¿Qué estilo de vida tienen?</h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Personas que se preocupan por su alimentación. </p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
                <div class="col-md-2">
                  <p><span class="circle-2"></span></p>
                  <p><span class="circle-2"></span></p>
                  <p><span class="circle-2"></span></p>
                  <p><span class="circle-1"></span></p>
                  <p><span class="circle-2"></span></p>
                  <p><span class="circle-2"></span></p>
              </div>
        </div>
    </div>
    <?php include("../modules/segmentos-footer.php"); ?>
  </body>
</html>