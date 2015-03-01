<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:recursos-2.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE recursos SET pregunta2 = '" . $respuesta . "' WHERE id_recursos = " . $_SESSION['id_recursos'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:recursos-3.php");
                exit;
            }