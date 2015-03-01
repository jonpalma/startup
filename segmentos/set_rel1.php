<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:relacion-1.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE relacion SET pregunta1 = '" . $respuesta . "' WHERE id_relacion = " . $_SESSION['id_relacion'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:relacion-2.php");
                exit;
            }