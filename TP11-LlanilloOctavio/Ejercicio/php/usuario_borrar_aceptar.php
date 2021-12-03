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
        $consulta = 'DELETE FROM usuario WHERE id=' . $id ;
        $resultado = mysqli_query($conexion, $consulta);
        desconectar($conexion);
    ?>

    <main>
        <?php            
            if ($resultado)
                echo '<h2>Se borró el usuario exitosamente</h2>';                
            else echo '<h2>Error al borrar</h2>';
            header('refresh:2; url=usuario_listado.php');
        ?>
    </main>
</section>


<?php 
    require_once '../html/pie.html';
    }
    else header('refresh:0;url=../index.php');
?>