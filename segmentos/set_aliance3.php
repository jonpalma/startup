<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:alianzas-3.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE alianzas SET pregunta3 = '" . $respuesta . "' WHERE id_alianzas = " . $_SESSION['id_alianzas'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:../canvas.php");
                exit;
            }