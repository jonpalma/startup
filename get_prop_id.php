<?php session_start(); ?>
<?php
    $_SESSION['id_propuesta_valor'] = $_GET['id_propuesta_valor'];
    header('Location:segmentos/propuesta-1.php');