<?php 
    function armarNombre($nombre, $descripcion){
        $extension = explode('.', $nombre);
        return $descripcion . '.' . $extension[1];
    }
?>