<?php session_start(); ?>
<?php

    include_once('bd/inicializar.php');
    
    if(!isset($_POST['user']) || !isset($_POST['pass']) || !isset($_POST['passCheck'])) {
        header('Location:create.php');
        exit;
    } else {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $passwordC = $_POST['passCheck'];

        if(!validateEmail($username)) {
            $_SESSION['username_invalido'] = 1;
            header('Location:register.php');
            exit;  
        } else if(!validatePasswords($password, $passwordC)) {
            $_SESSION['pass_invalido'] = 1;
            header('Location:register.php');
            exit;
        } else {
            $sql = "INSERT INTO usuarios (nombre_usuario, password_usuario) VALUES ('" . $username . "', aes_encrypt('" . $password . "', 'startup_weekend'))";
            mysql_query($sql);
            mysql_close();
            header('Location:login.php');
            exit;
        }
    }
    
    function validateEmail($username) {
        if(preg_match("/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/", $username)) {
            return true;
        } else {
           return false;
        }
    }
    
    function validatePasswords($password, $passwordC) {
        if($password == $passwordC) {
            return true;
        } else {
            return false;
        }
    }
    

