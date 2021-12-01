<?php 
    session_start();
    if(!empty($_SESSION['usuario'])){
        require_once 'conexion.php';

        if (!empty($_POST['titulo']) && !empty($_POST['duracion']) && !empty($_POST['genero']) && !empty($_POST['fecha'])){
            $titulo = $_POST['titulo'];
            $duracion = $_POST['duracion'];
            $genero = $_POST['genero'];
            $fecha = date_format(date_create($_POST['fecha']), 'Y-m-d');
            $ubicacion = $_FILES['foto']['tmp_name'];
            $conexion = conectar();

            if (!empty($_FILES['foto']['size'])){
                $tmp = $_FILES['foto']['name'];
                $foto = explode('.', $tmp);
                $carpeta = '../img/portadas/';
                $nombre = $titulo. '.jpg';
        
                if(!file_exists($carpeta)) mkdir($carpeta, 0777, true);
                
                $destino = $carpeta . $nombre;
                move_uploaded_file($ubicacion, $destino);
            }
            else $nombre = null;
            
            $consulta = 'INSERT INTO pelicula (titulo, duracion, genero, fecha_estreno, foto_portada) VALUES (\'' . $titulo . '\', \'' . $duracion . '\', \'' . $genero . '\', \'' . $fecha . '\', \'' . $nombre . '\')';
            if(mysqli_query($conexion, $consulta)) echo '<h2>Guardado exitoso</h2>';
            else echo '<h2>Error al guardar</h2>';
            desconectar($conexion);                
        }
        else echo '<p>Faltan datos</p>';
        header ('refresh:3;url=pelicula_listado.php');
    }
    else header('refresh:0;url=../index.php');
?>