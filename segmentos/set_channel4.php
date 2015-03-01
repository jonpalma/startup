<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:canal-4.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE canales_dist SET pregunta4 = '" . $respuesta . "' WHERE id_canales_dist = " . $_SESSION['id_canales_dist'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:canal-5.php");
                exit;
            }