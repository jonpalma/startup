<?php session_start(); ?>
<?php 
    if(isset($_SESSION['user'])) {
            $id_user = $_SESSION['user'];
            echo $id_user;
    }
?>

