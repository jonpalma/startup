<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:canal-1.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE canales_dist SET pregunta1 = '" . $respuesta . "' WHERE id_canales_dist = " . $_SESSION['id_canales_dist'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:canal-2.php");
                exit;
            }