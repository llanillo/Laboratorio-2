<?php
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
    ?>

    <main>
        <?php                     
            if ($resultado){                
                $fila = mysqli_fetch_array($resultado);                
                echo '<form action=pelicula_modificar_aceptar.php method=post">';
                echo '<input type="hidden" name="id" value="' . $fila['id'] . '">';
                echo 'Título <input type="text" name="titulo" value="' . $fila['titulo'] . '">';
                echo 'Duración <input type="number" name="duracion" value="'. $fila['duracion'] . '">';
                echo '<input type="submit" value="Modificar">';
            }   
            else echo '<p>Error al buscar la película</p>';
            desconectar($conexion);
        ?>
    </main>
</section>

<?php 
    require_once '../html/pie.html';
?>