<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("../modules/segmentos-head.php"); ?>
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
               <form action="">
                    <div class="cont-center">
                        <h3>¿Son hombres o mujeres?</h3>
                        <textarea type="text" class="input-answer" ></textarea>
                        <p>Ejemplo: Ejemplo: Sexo indistinto. </p>
                         <input type="submit" class="btn btn-green" value="Siguiente">
                    </div>
                </form>
            </div>
                <div class="col-md-2">
                  <p><span class="circle-1"></span></p>
                  <p><span class="circle-2"></span></p>
                  <p><span class="circle-2"></span></p>
                  <p><span class="circle-2"></span></p>
              </div>
        </div>
    </div>
    <?php include("../modules/segmentos-footer.php"); ?>
  </body>
</html>