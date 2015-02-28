<?php session_start(); ?>
<?php
    include_once('bd/inicializar.php');
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    
    $error = '';
    $loginInvalido = 0;
    $sql = mysql_query("SELECT * FROM usuarios"
                    . " WHERE nombre_usuario = '" . $usuario . "' AND password_usuario = aes_encrypt('" . $password . "', 'startup_weekend') LIMIT 1;");
            $row = mysql_fetch_array($sql, MYSQL_ASSOC);
                        if(! $row ) {
                           $loginInvalido = 1;
                         } else {
                             $_SESSION['user'] = $row['id_usuario'];
                             //cerrar conexión a BD
                             mysql_close();
                             header('Location:proyectos.php');
                             exit;
                         }
    
    if($error != '' || $loginInvalido != 0) {
        $_SESSION['loginInvalido'] = $loginInvalido;
        $_SESSION['errorLogin'] = $error;
        header('Location:login.php');
    }
