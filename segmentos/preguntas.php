<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("../modules/segmentos-head.php"); ?>
  </head>
  <body>
      <?php include("../modules/menu-sup.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="cont-left">
                    <img src="images/canvas-1.png" alt="">
                    <h3>Clientes</h3>
                    <h5>Describe la red de proveedores y socios que contribuye al funcionamiento de nuestro negocio.</h5>
                </div>
            </div>
            <div class="col-md-6">
               <form action="">
                    <div class="cont-center">
                        <h3>¿Dónde se encuentran?</h3>
                        <textarea type="text" class="input-answer" ></textarea>
                        <p>Ejemplo: En la ciudad de Chihuahua.</p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
            <?php include("../modules/circles.php"); ?>
        </div>
    </div>
    
         <div class="footer">
       <h4>Todos los derechos reservados CarneMart 2015</h4>
   </div>
    <?php include("../modules/segmentos-footer.php"); ?>
  </body>
</html>