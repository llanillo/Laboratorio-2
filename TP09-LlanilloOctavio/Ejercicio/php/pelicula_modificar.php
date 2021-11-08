<?php
    session_start();
    if(!empty($_SESSION['usuario'])){    
        $ruta = '../css';
        require_once '../html/encabezado.html';
?>


<section>
    <?php 
        require_once 'menu.php';
        require_once 'conexion.php';
        
        $conexion = conectar();
        $id = $_GET['id'];
        $consulta = 'SELECT * FROM pelicula WHERE id=\''. $id . '\'';
        $resultado = mysqli_query($conexion, $consulta);
        desconectar($conexion);

        if ($resultado){                
            $fila = mysqli_fetch_array($resultado);   
            require 'modificacion.php';
        }   
        else echo '<p>Error al buscar la película</p>';    
    ?>

</section>

<?php 
        require_once '../html/pie.html';
    }
    else header('refresh:0;url=../index.php');
?>