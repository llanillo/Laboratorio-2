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
                    <?php 
                        if ($_SESSION['tipo'] != 'Restringido')
                            echo '<th>Modificar</th>';
                    ?>                     
                    <?php 
                        if ($_SESSION['tipo'] == 'Administrador')
                            echo '<th>Eliminar</th>';
                    ?>                                                                    
                </tr>
            </thead>
            <tbody>
            <?php 
                if ($conexion){
                    $consulta = 'SELECT id, usuario, mail, fecha_alta, tipo FROM usuario';
                    $resultado = mysqli_query($conexion, $consulta);
            
                    if (mysqli_num_rows($resultado)){
                        while($fila = mysqli_fetch_array($resultado)){
                            echo '<tr>';
                            echo '<td>' . $fila[0] . '</td>';
                            echo '<td>' . $fila[1] . '</td>';
                            echo '<td>' . $fila[2] . '</td>';
                            echo '<td>' . $fila[3] . '</td>';
                            if($_SESSION['tipo'] != 'Restringido')
                                echo '<td><a href="usuario_modificar.php?id=' . $fila['id'] . '"><img src="../img/iconos/edit_pencil.png"></a></td>';
                            if ($_SESSION['tipo'] == 'Administrador')
                                echo '<td><a href="usuario_borrar.php?id=' . $fila['id'] . '"><img src="../img/iconos/trash_empty.png"></a></td>';
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