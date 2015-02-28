<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['user'])) {
            header('Location:login.php');
            exit;
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    require_once 'bd/inicializar.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title></title>
    </head>
    <body>
        <?php
            $proyectos = mysql_query("SELECT * FROM proyectos WHERE id_usuario = 1");
            while ($query = mysql_fetch_array($proyectos, MYSQL_ASSOC)) {
            ?>
        <div>
            <h1><?php echo $query['nombre_proyecto']; ?></h1>
            <p><?php echo $query['descripcion_proyecto']; ?></p>
        </div>
        <?php
            }
            mysql_close();
        ?>
    </body>
</html>