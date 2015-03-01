<?php session_start(); ?>
<?php
    $_SESSION['id_costos'] = $_GET['id_costos'];
    header('Location:segmentos/preguntas.php');