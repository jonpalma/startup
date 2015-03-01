<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:ingresos-1.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE flujo SET pregunta1 = '" . $respuesta . "' WHERE id_flujo = " . $_SESSION['id_flujo'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:../canvas.php");
                exit;
            }