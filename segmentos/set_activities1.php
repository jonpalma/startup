<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:actividades-1.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE actividades SET pregunta1 = '" . $respuesta . "' WHERE id_actividades = " . $_SESSION['id_actividades'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:actividades-2.php");
                exit;
            }