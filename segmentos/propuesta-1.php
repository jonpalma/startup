<?php session_start(); ?>
<?php
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_propuesta_valor = $_SESSION['id_propuesta_valor'];
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
        $sql = "SELECT pregunta1 FROM propuesta_valor WHERE id_propuesta_valor=" . $id_propuesta_valor;
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
                    <img src="../images/canvas-2.png" alt="">
                    <h3>Propuesta de valor</h3>
                    <p>Tu propuesta de valor debe de explicar claramente cuáles son los beneficios de tu producto o servicio y por qué debe de escogerte a ti y no a la competencia. </p>
                </div>
            </div>
            <div class="col-md-6">
                <form action="set_prop1.php" method="post">
                    <div class="cont-center">
                        <h3>¿Con tu propuesta qué problema ayudas a resolver? </h3>
                        <textarea type="text" name="respuesta" class="input-answer" ><?php echo $respuesta; ?></textarea>
                        <p>Ejemplo: Gente diabética que no puede comer azúcar pero quiere consumir mermelada</p>
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