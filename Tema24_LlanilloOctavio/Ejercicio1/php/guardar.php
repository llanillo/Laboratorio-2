<?php 
    require_once 'funciones.php';

    if (!empty($_POST['descripcion']) && !empty($_FILES['foto']['size'])){

        $carpeta = '../habitaciones/';
        $nombre = armarNombre($_FILES['foto']['name'], $_POST['descripcion']);

        if (!file_exists($carpeta)) mkdir($carpeta);

        $origen = $_FILES['foto']['tmp_name'];
        $destino = $carpeta . $nombre;
        move_uploaded_file($origen, $destino);

        echo '<p>Se guardó exitosamente la imagen</p>';
    }
    else {
        echo '<p>Hay campos vacíos</p>';
    }
?>