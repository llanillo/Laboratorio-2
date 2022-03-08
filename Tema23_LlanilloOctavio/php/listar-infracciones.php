<?php 
    require_once '../html/cabecera.html';
?>

<section>
    <?php 
        require_once '../html/menu.html';
        require_once 'funciones-conexion.php';
        
        $consulta = 'SELECT * FROM infracciones';
        $conexion = conectar();        
        $resultado = mysqli_query($conexion, $consulta);        
        desconectar($conexion);
    ?>

    <main>
        <?php 
            if ($resultado){
                echo '<h2>Listado</h2>';
                echo '<h3>Infracciones</h3>';
                if (mysqli_num_rows($resultado)){  
                    echo '<table>';       
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Nombre Conductor</th>';
                    echo '<th>Nombre Agente</th>';
                    echo '<th>Fecha</th>';
                    echo '<th>Lugar</th>';
                    echo '<th>Tipo Infracción</th>';
                    echo '<th>Foto</th>';
                    echo '<th>Actualizar</th>';
                    echo '<th>Eliminar</th>';
                    echo '</tr>';
                    echo '<tbody>';
                    while ($fila = mysqli_fetch_array($resultado)){                
                        echo '<tr>';
                        echo '<td>';                        
                        echo $fila['nombre_conductor'];
                        echo '</td>';
                        echo '<td>';                        
                        echo $fila['nombre_agente'];
                        echo '</td>';
                        echo '<td>';                        
                        echo $fila['fecha'];
                        echo '</td>';
                        echo '<td>';                        
                        echo $fila['lugar'];
                        echo '</td>';
                        echo '<td>';                        
                        echo $fila['tipo_infraccion'];
                        echo '</td>';
                        echo '<td>';
                        if (!empty($fila['foto']))
                            echo '<img src="../fotos/' . $fila['foto'] . '" alt="foto portada">';
                        else
                            echo '<img src="../img/fotos/default.png" alt="foto portada">';  
                        echo '</td>';     
                        echo '<td>';
                        echo '<a href="actualiza.php?id='. $fila['id'] .'"><img class ="img-tabla" src="../img/edit_pencil.png"></a>';                        
                        echo '</td>';                        
                        echo '<td>';
                        echo '<a href="eliminacion.php?id=' . $fila['id'] . '"><img class="img-tabla" src="../img/trash_empty.png"></a>';                                                          
                        echo '</td>';
                        echo '</tr>';
                                                                                                
                    }                                                       
                    echo '</tbody>';
                    echo '</table>';
                }
                else echo '<p>No se encontró ningún resultado</p>';            
            }
            else {
                echo '<p>Error en la consulta</p>';     
                header('refresh:3; url=../index.php.php');
            }
        ?>

    </main>
</section>

<?php 
    require_once '../html/pie.html';
?>