<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:propuesta-5.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE propuesta_valor SET pregunta5 = '" . $respuesta . "' WHERE id_propuesta_valor = " . $_SESSION['id_propuesta_valor'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:../canvas.php");
                exit;
            }