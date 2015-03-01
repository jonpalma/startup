<?php session_start(); ?>
<?php
    $_SESSION['id_relacion'] = $_GET['id_relacion'];
    header('Location:segmentos/preguntas.php');