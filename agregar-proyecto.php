<?php session_start(); ?>
<?php 
    
    if(!isset($_POST['project_name']) || !isset($_POST['project_description'])) {
        header('Location:create.php');
    } else {
            if(isset($_SESSION['user'])) {
                $id_user = $_SESSION['user'];
                echo $id_user;
            }
    }
?>

