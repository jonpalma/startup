<?php
    include_once('bd/inicializar.php');
    $usuario = $_GET['user'];
    
    $sql = mysql_query("SELECT * FROM usuarios"
                    . " WHERE nombre_usuario = '" . $usuario . "'");
            $row = mysql_fetch_array($sql, MYSQL_ASSOC);
                        if(! $row ) {
                           echo 1;
                         } else {
                             echo 0;
                             exit;
                         }