<?php session_start(); ?>
<?php
    $_SESSION['id_clientes'] = $_GET['id_clientes'];
    header('Location:segmentos/preguntas.php');