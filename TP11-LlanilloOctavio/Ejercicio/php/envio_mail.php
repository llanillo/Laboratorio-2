<?php
    session_start();    
    if(!empty($_SESSION['usuario']) && !empty($_POST['motivo']) && !empty($_POST['mensaje'])){
        require 'conexion.php';
        $usuario = $_SESSION['usuario'];
        $motivo = $_POST['motivo'];
        $mensaje = $_POST['mensaje'];        
        $correoDestino = "ohgamertravel@gmail.com";
        $asunto = $motivo . ' - ' . $usuario;

        $consulta = 'SELECT * FROM usuario WHERE id=' . $_SESSION['id'];
        $conexion = conectar();
        $resultado = mysqli_query($conexion, $consulta);
        desconectar($conexion);

        if ($resultado && mysqli_num_rows($resultado) == 1){            
                $fila = mysqli_fetch_array($resultado);            
                $correoOrigen = $fila['email'];
        }
        else{
            header('refresh:0;url=contactenos.php');
        }                
        $cabecera = 'From: ' . $correoOrigen . "\rn\n" . "Reply-To:" . $correoOrigen;
        if(mail ($correoDestino, $asunto, $mensaje, $cabecera));
    }
?>