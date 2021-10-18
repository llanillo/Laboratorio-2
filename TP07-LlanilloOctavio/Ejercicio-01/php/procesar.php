<?php
    $ruta = '../css';
    require_once '../html/encabezado.html';
    require_once 'conexion.php';
?>

<main>
    <?php 
        if (!empty($_POST['usuario']) && !empty($_POST['clave'])){
            $usuario = $_POST['usuario'];
            $clave = sha1($_POST['clave']);
            $conexion = conectar();
            if ($conexion){
                $consulta = 'SELECT id FROM usuario WHERE usuario = \'' . $usuario . '\' AND password = \'' . $clave . '\'';
                $resultado = mysqli_query($conexion, $consulta);
    
                if (mysqli_num_rows($resultado)) header('url=listado.php');
                else{
                    echo '<p>No se encontró ningún usuario</p>';
                    header('refresh = 5; url = ../index.php');
                }
            }
        }
    ?>
</main>

<?php
    require_once '../html/pie.html';
?>