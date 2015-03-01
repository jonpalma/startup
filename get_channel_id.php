<?php session_start(); ?>
<?php
    $_SESSION['id_canal'] = $_GET['id_canal'];
    header('Location:segmentos/preguntas.php');