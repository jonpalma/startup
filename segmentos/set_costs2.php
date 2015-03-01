<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:egresos-2.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE costos SET pregunta2 = '" . $respuesta . "' WHERE id_costos = " . $_SESSION['id_costos'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:../canvas.php");
                exit;
            }