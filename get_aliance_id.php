<?php session_start(); ?>
<?php
    $_SESSION['id_alianzas'] = $_GET['id_alianzas'];
    header('Location:segmentos/alianzas-1.php');