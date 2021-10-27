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
        $consulta = 'SELECT * FROM pelicula WHERE id='. $id;
        $resultado = mysqli_query($conexion, $consulta);
    ?>

    <main>
        <?php                     
            if ($resultado){                
                $fila = mysqli_fetch_array($resultado);                
                echo '<h2>Eliminar película</h2>';
                echo '¿Está seguro de querer eliminar la película ' . $fila['titulo'] . '?</p>';   
                echo '<section>';
                echo '<a href="pelicula_borrar_aceptar.php?id='. $id . '"><button>Aceptar</button></a>';
                echo '<a href="pelicula_listado.php"><button>Cancelar</button></a>';
                echo '</section>';
            }   
            else echo '<p>Error al buscar la película</p>';
            desconectar($conexion);
        ?>
    </main>
</section>

<?php 
    require_once '../html/pie.html';
?>