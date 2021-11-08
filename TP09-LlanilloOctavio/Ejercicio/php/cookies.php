<?php
    session_start();    
    if(!empty($_GET['id']) && !empty($_SESSION['usuario'])){        
        $usuario = $_SESSION['usuario'];
        $valor = $_GET['id'];
        $expiracion = time() + 2*30*24*60*60;
        
        if(!empty($_COOKIE[$usuario])){
            setcookie($usuario, $_COOKIE[$usuario] . '-' . $valor, $expiracion, '/');            
        }
        else{            
            setcookie($usuario, $valor, $expiracion, '/');
        } 
        header('refresh:0;url=pelicula_listado.php');
    }
    else header('refresh:0;url=../index.php');
?>