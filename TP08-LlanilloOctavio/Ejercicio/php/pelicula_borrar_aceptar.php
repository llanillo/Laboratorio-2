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
        $consulta = 'DELETE FROM pelicula WHERE id= "' . $id . '\'' ;
        $resultado = mysqli_query($conexion, $consulta);
        desconectar($conexion);
    ?>

    <main>
        <?php            
            if ($resultado)
                echo '<h2>Se borró la película exitosamente</h2>';                
            else echo '<h2>Error al borrar</h2>';
            header('refresh:3; url=pelicula_listado.php');
        ?>
    </main>
</section>


<?php 
    require_once '../html/pie.html';
?>