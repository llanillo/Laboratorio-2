<?php
    $ruta = 'css';
    require_once 'html/encabezado.html';    
?>

<?php
    define('RUTA_CARPETA', 'txt/');
    define ('NOMBRE_ARCHIVO', 'cursos.txt');
    define ('RUTA_ARCHIVO', RUTA_CARPETA . '/' . NOMBRE_ARCHIVO);
?>

<main>
    <table>
        <caption>Listado de cursos disponibles</caption>
        <thead>            
            <tr>
                <th>Logo</th>
                <th>Curso</th>
                <th>Disertante</th>
                <th>Fecha de inicio</th>
                <th>Inscripción</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $archivo = fopen(RUTA_ARCHIVO, 'r');
                while (!feof($archivo)){
                    $linea = fgets($archivo);
                    if ($linea != ''){                        
                        $linea_separada = explode(';', $linea);                        
                        echo '<tr>';
                        echo '<td><figure><img class="img" src="' . 'img/' . $linea_separada[4] . '"></figure></td>';
                        echo '<td>' . $linea_separada[0] . '</td>';
                        echo '<td>' . $linea_separada[1] . '</td>';
                        echo '<td>' . $linea_separada[2] . '</td>';
                        $disponibilidad = $linea_separada[3];
                        if ($disponibilidad == 'Sin Cupos') echo '<td class="rojo">' . $disponibilidad . '</td>';
                        else echo '<td class="link"> Inscribirse </td>';
                        echo '</tr>';
                    }
                }
                fclose($archivo);
            ?>
        </tbody>
    </table>
</main>

<?php
    require_once 'html/pie.html';
?>