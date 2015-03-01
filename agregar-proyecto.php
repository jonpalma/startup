<?php session_start(); ?>
<?php 
    if(!isset($_POST['project_name']) || !isset($_POST['project_description'])) {
        header('Location:create.php');
        exit;
    } else {
            if(isset($_SESSION['user'])) {
                $id_user = $_SESSION['user'];
                echo $id_user;
                include_once('bd/inicializar.php');
                
                $nombre_proyecto = $_POST['project_name'];
                $descripcion_proyecto = $_POST['project_description'];
                
                $sql = "INSERT INTO proyectos (nombre_proyecto, descripcion_proyecto, id_usuario) VALUES ('" . $nombre_proyecto . "', '" . $descripcion_proyecto . 
                        "', " . $id_user . ")";
                
                mysql_query($sql);
                $id_proyecto = mysql_insert_id();
                $sql = "INSERT INTO clientes (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                $sql = "INSERT INTO propuesta_valor (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                $sql = "INSERT INTO canales_dist (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                $sql = "INSERT INTO actividades (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                $sql = "INSERT INTO relacion (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                $sql = "INSERT INTO flujo (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                $sql = "INSERT INTO recursos (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                $sql = "INSERT INTO alianzas (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                $sql = "INSERT INTO costos (id_proyecto) VALUES (" . $id_proyecto . ")";
                mysql_query($sql);
                mysql_close();
                
                header("Location:proyectos.php");
                exit;
            } else {
                header('Location:login.php');
                exit;
            }
    }