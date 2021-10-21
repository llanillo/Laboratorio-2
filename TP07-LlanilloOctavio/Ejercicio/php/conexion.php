<?php     
    $ruta = '../css';
    
    function conectar(){
        $servidor = 'localhost';
        $usuario = 'root';
        $clave = '';
        $db = 'peliculas';
        $conexion = mysqli_connect($servidor, $usuario, $clave, $db);   
        if (!$conexion) echo '<p>Error al conectar en el servidor</p>';
        else return $conexion;
    }

    function desconectar($conexion){
        if ($conexion)mysqli_close($conexion);
        else echo '</p>No había conexión</p>';
    }
?>