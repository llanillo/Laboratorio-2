<?php 
    session_start();
    if(!empty($_SESSION['usuario'])){
        require_once 'conexion.php';

        if (!empty($_POST['nombre']) && !empty($_POST['mail']) && !empty($_POST['tipo'])){
            $nombre = $_POST['nombre'];
            $clave = sha1($_POST['clave']);
            $mail = $_POST['mail'];
            $tipo = $_POST['tipo'];        
            $fecha = date('Y-m-d');
            $ubicacion = $_FILES['foto']['tmp_name'];
            $conexion = conectar();

            if (!empty($_FILES['foto']['size'])){
                $tmp = $_FILES['foto']['name'];                
                $carpeta = '../img/usuarios/';
                $foto = $nombre. '.jpg';
        
                if(!file_exists($carpeta)) mkdir($carpeta, 0777, true);
                
                $destino = $carpeta . $foto;
                move_uploaded_file($ubicacion, $destino);
            }
            else $foto = null;
            
            $consulta = 'INSERT INTO usuario (usuario, password, mail, fecha_alta, tipo, foto) VALUES (\'' . $nombre . '\', \'' . $clave . '\', \'' . $mail . '\', \'' . $fecha . '\', \'' . $tipo . '\', \'' . $foto . '\')';
            if(mysqli_query($conexion, $consulta)) echo '<h2>Guardado exitoso</h2>';
            else echo '<h2>Error al guardar</h2>';
            desconectar($conexion);                
        }
        else echo '<p>Faltan datos</p>';
        header ('refresh:3;url=usuario_listado.php');
    }
    else header('refresh:0;url=../index.php');
?>