<?php session_start(); ?>
<?php
    $_SESSION['id_costos'] = $_GET['id_costos'];
    header('Location:segmentos/egresos-1.php');