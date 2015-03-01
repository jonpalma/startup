<?php session_start(); ?>
<?php
    $_SESSION['id_flujo'] = $_GET['id_flujo'];
    header('Location:segmentos/ingresos-1.php');