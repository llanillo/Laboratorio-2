<?php 
    session_start();
    if (!empty($_SESSION['usuario'])){    
        $ruta = '../css';
        require_once '../html/encabezado.html';
        
        $expira = time() + 30 * 24 * 60 * 60;
        setcookie('estilo_' . $_SESSION['usuario'], $_POST['color'], $expira);        
    }
    header ('refresh:0;url=usuario_listado.php');
?>