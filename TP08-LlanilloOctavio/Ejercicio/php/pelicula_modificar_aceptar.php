<?php
    $ruta = '../css';
    require_once '../html/encabezado.html';
?>

<section>
    <?php
        require_once 'menu.php';
        require_once 'conexion.php';
        
        $conexion = conectar();        
        $consulta = 'UPDATE pelicula SET titulo=\'' . $_POST['titulo'] . '\', duracion=' . $_POST['duracion'] . ' WHERE id=' . $_POST['id'];
        $resultado = mysqli_query($conexion, $consulta);
        desconectar($conexion);
    ?>

    <main>
        <?php            
            if ($resultado)
                echo '<h2>Se modificó la película exitosamente</h2>';                
            else echo '<h2>Error al modificar</h2>';
            header('refresh:3; url=pelicula_listado.php');
        ?>
    </main>
</section>


<?php 
    require_once '../html/pie.html';
?>