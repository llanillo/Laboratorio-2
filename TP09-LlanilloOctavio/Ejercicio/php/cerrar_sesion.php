<?php
    session_start();
    if (!empty($_SESSION['usuario'])){
        session_destroy();
        header('refresh:0;url=../index.php');
    }
    else{
        echo '<h2>No inicio sesión</h2>';
        header('refresh:3;url=../index.php');
    }
?>