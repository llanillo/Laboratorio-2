<?php 
    require_once 'conexion.php';

    if (!empty($_POST['titulo']) && !empty($_POST['duracion']) && !empty($_POST['genero']) && !empty($_POST['fecha']) && !empty($_FILES['foto']['size'])){
        $titulo = $_POST['titulo'];
        $duracion = $_POST['duracion'];
        $genero = $_POST['genero'];
        $fecha = date_format(date_create($_POST['fecha']), 'Y-m-d');
        $ubicacion = $_FILES['foto']['tmp_name'];
        $conexion = conectar();

        $tmp = $_FILES['foto']['name'];
        $foto = explode('.', $tmp);
        $carpeta = '../img/portadas/';
        $nombre = $titulo. '.jpg';

        if(!file_exists($carpeta)) mkdir($carpeta, 0777, true);
        
        $destino = $carpeta . $nombre;
        move_uploaded_file($ubicacion, $destino);
        
        $consulta = 'INSERT INTO pelicula (titulo, duracion, genero, fecha_estreno, foto_portada) VALUES (\'' . $titulo . '\', \'' . $duracion . '\', \'' . $genero . '\', \'' . $fecha . '\', \'' . $nombre . '\')';
        if(mysqli_query($conexion, $consulta)) echo '<h2>Guardado exitoso</h2>';
        else echo '<h2>Error al guardar</h2>';
        desconectar($conexion);
    }
?>