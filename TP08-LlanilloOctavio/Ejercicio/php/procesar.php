<main>
    <?php 
        require_once 'conexion.php';
        if (!empty($_POST['usuario']) && !empty($_POST['clave'])){
            $usuario = $_POST['usuario'];
            $clave = sha1($_POST['clave']);
            $conexion = conectar();
            if ($conexion){
                $consulta = 'SELECT id FROM usuario WHERE usuario = \'' . $usuario . '\' AND password = \'' . $clave . '\'';
                $resultado = mysqli_query($conexion, $consulta);

                if (mysqli_num_rows($resultado)) {
                    echo '<p>Entro</p>';
                    header('refresh: 0; url=pelicula_listado.php');                
                }                
                else{
                    echo '<h2>No se encontró ningún usuario</h2>';
                    header('refresh: 5; url=../index.php')    ;                
                }
            }
        }
    ?>
</main>
