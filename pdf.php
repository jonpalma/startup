<?php session_start(); ?>
<?php
    if(!isset($_GET['id_proyecto'])) {
            header('Location:login.php');
            exit;
    } else {
        $id_proyecto = $_GET['id_proyecto'];
        include_once('bd/inicializar.php');
    }
?>
<!DOCTYPE html>
<?php 
    $html = '<html lang="es"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>PDF</title>'
        . '</head><body>'
        . '<div class="container"><div class="row"><div class="pdf"><h3>Clientes</h3>';
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PDF</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
         <div class="row">
            <div class="pdf">
             <h3>Clientes</h3>
             <?php
                    $sql = "SELECT * FROM clientes WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
             ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <p><?php echo $result['pregunta2']; ?></p>
              <?php $html .= '<p>' . $result['pregunta2'] . '</p>'; ?>
              <p><?php echo $result['pregunta3']; ?></p>
              <?php $html .= '<p>' . $result['pregunta3'] . '</p>'; ?>
              <p><?php echo $result['pregunta4']; ?></p>
              <?php $html .= '<p>' . $result['pregunta4'] . '</p>'; ?>
              <p><?php echo $result['pregunta5']; ?></p>
              <?php $html .= '<p>' . $result['pregunta5'] . '</p>'; ?>
              <p><?php echo $result['pregunta6']; ?></p>
              <?php $html .= '<p>' . $result['pregunta6'] . '</p>'; ?>
              <hr>
            </div>
            <div class="pdf">
             <h3>Propuesta de Valor</h3>
             <?php
                    $html .= '<hr></div><div class="pdf"><h3>Propuesta de Valor</h3>';
                    $sql = "SELECT * FROM propuesta_valor WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
             ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <p><?php echo $result['pregunta2']; ?></p>
              <?php $html .= '<p>' . $result['pregunta2'] . '</p>'; ?>
              <p><?php echo $result['pregunta3']; ?></p>
              <?php $html .= '<p>' . $result['pregunta3'] . '</p>'; ?>
              <p><?php echo $result['pregunta4']; ?></p>
              <?php $html .= '<p>' . $result['pregunta4'] . '</p>'; ?>
              <p><?php echo $result['pregunta5']; ?></p>
              <?php $html .= '<p>' . $result['pregunta5'] . '</p>'; ?>
              <hr>
            </div>
            <div class="pdf">
             <h3>Canales de Distribución</h3>
             <?php
                    $html .= '<hr></div><div class="pdf"><h3>Canales de Distribución</h3>';
                    $sql = "SELECT * FROM canales_dist WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <p><?php echo $result['pregunta2']; ?></p>
              <?php $html .= '<p>' . $result['pregunta2'] . '</p>'; ?>
              <p><?php echo $result['pregunta3']; ?></p>
              <?php $html .= '<p>' . $result['pregunta3'] . '</p>'; ?>
              <p><?php echo $result['pregunta4']; ?></p>
              <?php $html .= '<p>' . $result['pregunta4'] . '</p>'; ?>
              <p><?php echo $result['pregunta5']; ?></p>
              <?php $html .= '<p>' . $result['pregunta5'] . '</p>'; ?>
              <hr>
            </div>
            <div class="pdf">
             <h3>Actividades Clave</h3>
             <?php
                    $html .= '<hr></div><div class="pdf"><h3>Actividades Clave</h3>';
                    $sql = "SELECT * FROM actividades WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
             ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <p><?php echo $result['pregunta2']; ?></p>
              <?php $html .= '<p>' . $result['pregunta2'] . '</p>'; ?>
              <p><?php echo $result['pregunta3']; ?></p>
              <?php $html .= '<p>' . $result['pregunta3'] . '</p>'; ?>
              <hr>
            </div>
            <div class="pdf">
             <h3>Relación</h3>
             <?php
                    $html .= '<hr></div><div class="pdf"><h3>Relación</h3>';
                    $sql = "SELECT * FROM relacion WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
             ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <p><?php echo $result['pregunta2']; ?></p>
              <?php $html .= '<p>' . $result['pregunta2'] . '</p>'; ?>
              <hr>
            </div>
            <div class="pdf">
             <h3>Flujo de efectivo</h3>
             <?php
                    $html .= '<hr></div><div class="pdf"><h3>Flujo de efectivo</h3>';
                    $sql = "SELECT * FROM flujo WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
             ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <hr>
            </div>
            <div class="pdf">
             <h3>Recursos Clave</h3>
             <?php
                    $html .= '<hr></div><div class="pdf"><h3>Recursos Clave</h3>';
                    $sql = "SELECT * FROM recursos WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
               ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <p><?php echo $result['pregunta2']; ?></p>
              <?php $html .= '<p>' . $result['pregunta2'] . '</p>'; ?>
              <p><?php echo $result['pregunta3']; ?></p>
              <?php $html .= '<p>' . $result['pregunta3'] . '</p>'; ?>
              <hr>
            </div>
            <div class="pdf">
             <h3>Alianzas</h3>
             <?php
                    $html .= '<hr></div><div class="pdf"><h3>Alianzas</h3>';
                    $sql = "SELECT * FROM alianzas WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
             ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <p><?php echo $result['pregunta2']; ?></p>
              <?php $html .= '<p>' . $result['pregunta2'] . '</p>'; ?>
              <p><?php echo $result['pregunta3']; ?></p>
              <?php $html .= '<p>' . $result['pregunta3'] . '</p>'; ?>
              <hr>
            </div>
            <div class="pdf">
             <h3>Costos</h3>
             <?php
                    $html .= '<hr></div><div class="pdf"><h3>Costos</h3>';
                    $sql = "SELECT * FROM costos WHERE id_proyecto = " . $id_proyecto;
                    $retval = mysql_query($sql);
                    $result = mysql_fetch_array($retval, MYSQL_ASSOC);
             ?>
              <p><?php echo $result['pregunta1']; ?></p>
              <?php $html .= '<p>' . $result['pregunta1'] . '</p>'; ?>
              <p><?php echo $result['pregunta2']; ?></p>
              <?php $html .= '<p>' . $result['pregunta2'] . '</p>'; ?>
              <hr>
            </div>
             <?php mysql_close(); ?>
          </div>
          <?php 
            $_SESSION['html_str'] = $html;
          ?>
          <div class="row"><div class="col-sm-4"><a href="prueba.php" class="btn btn-listo margin-bottom">Descargar PDF</a></div></div>
    </div> 
  </body>
</html>