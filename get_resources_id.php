<?php session_start(); ?>
<?php
    $_SESSION['id_recursos'] = $_GET['id_recursos'];
    header('Location:segmentos/preguntas.php');