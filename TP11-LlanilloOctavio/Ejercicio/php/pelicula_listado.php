<?php
    session_start();
    if (!empty($_SESSION['usuario'])){    
        $ruta = '../css';
        require_once '../html/encabezado.html';
?>


<section>
    <?php 
        require_once 'menu.php';
        require_once 'conexion.php';
        
        $conexion = conectar();
        $consulta = 'SELECT * FROM pelicula';
        $resultado = mysqli_query($conexion, $consulta);        
        desconectar($conexion);
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
                            echo '<img class="logo" src="../img/portadas/' . $fila['foto_portada'] . '" alt="foto portada">';
                        else
                            echo '<img class="logo" src="../img/portadas/sin_imagen.png" alt="foto portada">';
                        echo '</figure>';
                        echo '</td>';
                        echo '<td>';
                        echo '<h3>' . $fila['titulo'] . '</h3>';
                        echo '</td>';
                        echo '</tr>';

                        echo '<tr><td>';
                        echo '<p class="datapeli">Género: ' . $fila['genero'] . '</p>';
                        echo '</td></tr>';

                        echo '<tr><td>';
                        echo '<p class="datapeli">Fecha de estreno: ' . $fila['fecha_estreno'] . '</p>';
                        echo '</td></tr>';

                        echo '<tr><td>';
                        echo '<p class="datapeli">Duración: ' . $fila['duracion'] . '</p>';
                        echo '</td></tr>';

                        echo '<tr><td></td><td>';
                        echo '<figure class="datapeli">';
                        if ($_SESSION['tipo'] == 'Editor' || $_SESSION['tipo'] == 'Administrador')
                            echo '<a href="pelicula_modificar.php?id='. $fila['id'] .'"><img src="../img/iconos/edit_pencil.png"></a>';
                        if($_SESSION['tipo'] == 'Administrador')
                            echo '<a href="pelicula_borrar.php?id=' . $fila['id'] . '"><img src="../img/iconos/trash_empty.png"></a>';                           
                        echo '<a href="cookies.php?id=' . $fila['id'] . '"><img src="../img/iconos/estrella.png"></a>';   
                        echo '</figure>';
                        echo '</td></tr>';
                                                                                                
                        echo '</tbody>';
                        echo '</table>';
                    }                                                       
                }
                else echo '<p>No se encontró ningún resultado</p>';            
            }
            else echo '<p>Error en la consulta</p>';            
        ?>
    </main>
</section>

<?php 
        require_once '../html/pie.html';
    }
    else header ('refresh:0;url=../index.php');
?>