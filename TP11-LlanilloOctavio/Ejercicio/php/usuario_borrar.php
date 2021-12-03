<?php
    session_start();
    if(!empty($_SESSION['usuario']) && $_SESSION['tipo'] == 'Administrador'){    
        $ruta = '../css';
        require_once '../html/encabezado.html';
?>

<section>
    <?php 
        require_once 'menu.php';
        require_once 'conexion.php';
        
        $conexion = conectar();
        $id = $_GET['id'];
        $consulta = 'SELECT * FROM usuario WHERE id='. $id;
        $resultado = mysqli_query($conexion, $consulta);
    ?>

    <main>
        <?php                     
            if ($resultado){                
                $fila = mysqli_fetch_array($resultado);                
                echo '<h2>Eliminar usuario</h2>';
                echo '¿Está seguro de querer eliminar el usuario ' . $fila['usuario'] . '?</p>';   
                echo '<section>';
                echo '<a href="usuario_borrar_aceptar.php?id='. $id . '"><button>Aceptar</button></a>';
                echo '<a href="usuario_listado.php"><button>Cancelar</button></a>';
                echo '</section>';
            }   
            else echo '<p>Error al buscar el usuario</p>';
            desconectar($conexion);
        ?>
    </main>
</section>

<?php 
        require_once '../html/pie.html';
    }
    else header('refresh:0;url=../index.php');
?>