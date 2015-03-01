<?php session_start(); ?>
<?php
    $_SESSION['id_actividades'] = $_GET['id_actividades'];
    header('Location:segmentos/preguntas.php');