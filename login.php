<?php session_start(); ?>
<?php 
    if(isset($_SESSION['user'])) {
            header('Location:proyectos.php');
            exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" el="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script> 
    <!-- Script background -->
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
      <?php
            if(isset($_SESSION['loginInvalido']) || isset($_SESSION['errorLogin'])) {
                if($_SESSION['loginInvalido'] == 1) { ?>
                   <span class="login-invalido"><p>Usuario o contraseña incorrecto</p></span>
                   <p style="visibility:hidden"><?php echo $_SESSION['errorLogin'];?></p>
                <?php
                }
                unset($_SESSION['loginInvalido']);
                unset($_SESSION['errorLogin']);
            }
        ?>
      <form action="log-in.php" method="post">
          <div class="login">
              <div class="login-cont">
               <div class="login-text"><h3>Login</h3></div>
               <div class="input"><input name="user" type="text" class="input-login" placeholder="Usuario"></div>
               <div class="input"><input name="pass" type="password" class="input-login" placeholder="Contraseña"></div>
                <p><input type="checkbox" class="checkbox">Recordar</p>
                <input type="submit" class="btn btn-login" value="INICIAR">
                </div>
            </div>
      </form>
			<div class="main">
				<ul id="cbp-bislideshow" class="cbp-bislideshow">
					<li><img src="images/1.jpg" alt="image01"/></li>
					<li><img src="images/2.jpg" alt="image02"/></li>
					<li><img src="images/3.jpg" alt="image03"/></li>
				</ul>
			</div>
		</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
		<script src="js/jquery.imagesloaded.min.js"></script>
		<script src="js/cbpBGSlideshow.min.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
  </body>
</html>