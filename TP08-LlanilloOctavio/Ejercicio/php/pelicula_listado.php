<?php
    $ruta = '../css';
    require_once '../html/encabezado.html';
?>


<section>
    <?php 
        require_once 'menu.php';
        require_once 'conexion.php';
        
        $conexion = conectar();
        $consulta = 'SELECT FROM * pelicula';
        $resultado = mysqli_query($conexion, $consulta);
    ?>
    <main>
        <?php         
            if ($resultado){
                echo '<h2>Listado de películas</h2>';
                if (mysqli_num_rows($resultado)){                        
                    while ($fila = mysqli_fetch_array($resultado)){
                        echo '<table class="tpelicula">'; 
                        echo '<tbody>';

                        echo '<tr>';
                        echo '<td rowspan="4">';
                        echo '<figure>';             
                        if (!empty($fila['foto_portada']))
                            echo '<img class="logo" src="img/portadas/' . $fila['foto_portada'] . 'alt="foto portada">';
                        else
                            echo '<img class="logo" src="img/sin_imagen.png>';
                        echo '</figure>';
                        echo '</td>';
                        echo '<td>';
                        echo '<h3>' . $fila['titulo'] . '</h3>';
                        echo '</td>';
                        echo '</tr>';

                        echo '<tr><td>';
                        echo '<p>Género: ' . $fila['genero'] . '</p>';
                        echo '</td></tr>';

                        echo '<tr><td>';
                        echo '<p>Fecha de estreno: ' . $fila['fecha_estreno'] . '</p>';
                        echo '</td></tr>';

                        echo '<tr><td>';
                        echo '<p>Duración: ' . $fila['duracion'] . '</p>';
                        echo '</td></tr>';

                        echo '<tr><td>';
                        echo '<figure>';
                        echo '<a href="pelicula_modificar.php?id='. $fila['id'] .'"><img src="../img/edit_pencil.png></a>';
                        echo '<a href="pelicula_borrar.php?id=' . $fila['id'] . '"><img src="../img/trash_empty.png></a>';                    
                        echo '</figure>';
                        echo '</td></tr>';
                                                                                                
                        echo '</tbody>';
                        echo '</table>';

             
                        if (!empty($fila['foto_portada']))
                            echo '<img class="logo" align="left" src="img/portadas/' . $fila['foto_portada'] . 'alt="foto portada">';
                        else
                            echo '<img class="logo" src="img/sin_imagen.png>';
                        echo '</figure>';

                        echo '<h3>' . $fila['titulo'] . '</h3>';    
                        echo '<p>Género: ' . $fila['genero'] . '</p>';
                        echo '<p>Fecha de estreno: ' . $fila['fecha_estreno'] . '</p>';
                        echo '<p>Duración: ' . $fila['duracion'] . '</p>';

                        echo '<a href="pelicula_modificar.php?id='. $fila['id'] .'"><img src="../img/edit_pencil.png></a>';
                        echo '<a href="pelicula_borrar.php?id=' . $fila['id'] . '"><img src="../img/trash_empty.png></a>';                    
                        echo '</figure>';
                    }                                                       
                }
                else echo '<p>No se encontró ningún resultado</p>';            
            }
            else echo '<p>Error en la consulta</p>';
            desconectar($conexion);
        ?>
    </main>
</section>

<?php 
    require_once '../html/pie.html';
?>