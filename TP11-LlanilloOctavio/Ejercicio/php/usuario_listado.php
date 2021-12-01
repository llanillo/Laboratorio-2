<?php 
    session_start();
    if (!empty($_SESSION['usuario'])){  
?>
<section>
    <?php                           
            $ruta = '../css';
            require_once '../html/encabezado.html';
            require_once 'menu.php';
            require_once 'conexion.php';

            $conexion = conectar();
    ?>
    <main>        
        <table>
            <caption>Listado de usuarios</caption>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Mail</th>
                    <th>Fecha alta</th>
                    <th>Tipo</th>                
                </tr>
            </thead>
            <tbody>
            <?php 
                if ($conexion){
                    $consulta = 'SELECT usuario, mail, fecha_alta, tipo FROM usuario';
                    $resultado = mysqli_query($conexion, $consulta);
            
                    if (mysqli_num_rows($resultado)){
                        while($fila = mysqli_fetch_array($resultado)){
                            echo '<tr>';
                            echo '<td>' . $fila[0] . '</td>';
                            echo '<td>' . $fila[1] . '</td>';
                            echo '<td>' . $fila[2] . '</td>';
                            echo '<td>' . $fila[3] . '</td>';
                            echo '</tr>';
                        }
                    }
                }
                desconectar($conexion);
            ?>
            </tbody>
        </table>
    </main>

</section>

<?php 
        require_once '../html/pie.html';
    }
    else header('refresh:0;url=../index.php');
?>