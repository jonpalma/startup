<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:alianzas-1.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE alianzas SET pregunta1 = '" . $respuesta . "' WHERE id_alianzas = " . $_SESSION['id_alianzas'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:alianzas-2.php");
                exit;
            }