<?php
    session_start();
?>
<main>
    <?php 
        require_once 'conexion.php';
        if (!empty($_POST['usuario']) && !empty($_POST['clave'])){
            $usuario = $_POST['usuario'];
            $clave = sha1($_POST['clave']);
            $conexion = conectar();
            $consulta = 'SELECT * FROM usuario WHERE usuario = \'' . $usuario . '\' AND password = \'' . $clave . '\'';
            $resultado = mysqli_query($conexion, $consulta);
            desconectar($conexion);
            if ($resultado){
                if (mysqli_num_rows($resultado) == 1) {
                    $usuario = mysqli_fetch_array($resultado);                    
                    $_SESSION['usuario'] = $usuario['usuario'];
                    $_SESSION['foto'] = $usuario['foto'];
                    header('refresh:0;url=pelicula_listado.php');                
                }                
                else{
                    echo '<h2>No se encontró ningún usuario</h2>';
                    header('refresh:3;url=../index.php');                
                }
            }
            else echo '<p>Error en la conexión</p>';            
        }
    ?>
</main>