<?php
    
    include_once('bd/inicializar.php');
    $id_proyecto = $_GET['id_proyecto'];
    $sql = "DELETE FROM proyectos WHERE id_proyecto = " . $id_proyecto;
    mysql_query($sql);
    header('Location:proyectos.php');
