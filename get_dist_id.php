<?php session_start(); ?>
<?php
    $_SESSION['id_canales_dist'] = $_GET['id_canales_dist'];
    header('Location:segmentos/preguntas.php');