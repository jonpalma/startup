<?php session_start(); ?>
<?php 
    if(!isset($_POST['respuesta'])) {
        header('Location:clientes-5.php');
        exit;
    } else {
                include_once('../bd/inicializar.php');
                
                $respuesta = $_POST['respuesta'];
                
                $sql = "UPDATE clientes SET pregunta5 = '" . $respuesta . "' WHERE id_clientes = " . $_SESSION['id_clientes'];
                
                mysql_query($sql);
                mysql_close();
                
                header("Location:clientes-6.php");
                exit;
            }