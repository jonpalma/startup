<?php session_start(); ?>
<?php

    include_once('bd/inicializar.php');
    require_once('ReCaptcha/ReCaptcha.php');
    require_once('ReCaptcha/RequestMethod.php');
    require_once('ReCaptcha/RequestParameters.php');
    require_once('ReCaptcha/Response.php');
    require_once('ReCaptcha/RequestMethod/Post.php');
    require_once('ReCaptcha/RequestMethod/Socket.php');
    require_once('ReCaptcha/RequestMethod/SocketPost.php');
    
    if(!isset($_POST['user']) || !isset($_POST['pass']) || !isset($_POST['passCheck'])) {
        $_SESSION['campos_vacios'] = 1;
        header('Location:register.php');
        exit;
    } else {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $passwordC = $_POST['passCheck'];
        
        // tu clave secreta
        $secret = "6LecPQYTAAAAADDWDn-m1zW-pfV-H5ykTAH486GF";

        // respuesta vacía
        $response = null;

        // comprueba la clave secreta
        $reCaptcha = new \ReCaptcha\ReCaptcha($secret);
        
        // si se detecta la respuesta como enviada
        if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verify(
                $_POST["g-recaptcha-response"],
                $_SERVER["REMOTE_ADDR"]
                
            );
        }

        if ($response != null && $response->isSuccess()) {
            if(!validateEmail($username)) {
            $_SESSION['username_invalido'] = 1;
            header('Location:register.php');
            exit;  
            } else if(!checkUserExists($username)) {
                $_SESSION['username_exists'] = 1;
                header('Location:register.php');
            } else if(!validatePassword($password)) {
                $_SESSION['pass_invalido'] = 1;
                header('Location:register.php');
                exit;
            }else if(!validatePasswords($password, $passwordC)) { 
                $_SESSION['pass_no_match'] = 1;
                header('Location:register.php');
                exit;
            } else {
                $sql = "INSERT INTO usuarios (nombre_usuario, password_usuario) VALUES ('" . $username . "', aes_encrypt('" . $password . "', 'startup_weekend'))";
                mysql_query($sql);
                mysql_close();
                header('Location:login.php');
                exit;
            }
        } else {
            $_SESSION['captcha'] = $response->getErrorCodes();
                header('Location:register.php');
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
    
    function validatePassword($password) {
        if(preg_match("/(?=.*\d)(?=.*[a-z]).{6,}/", $password)) {
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
    
    function checkUserExists($username) {
        $sql = "SELECT nombre_usuario FROM usuarios WHERE nombre_usuario = '" . $username . "'";
        
        $query = mysql_query($sql);
        
        if(mysql_num_rows($query) != 0) {
            return false;
        } else {
            return true;
        }
    }
    

