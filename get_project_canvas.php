<?php session_start(); ?>
<?php
    $_SESSION['id_proyecto'] = $_GET['id_proyecto'];
    echo $_SESSION['id_proyecto'];
    header('Location:canvas.php');