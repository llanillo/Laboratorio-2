<?php
    require_once 'html/encabezado.html';
?>

<main>
    <?php
        const POSIBILIDADES = array('-', '-', '-', '-',  '-', 'B');
        
        $filas = 10;
        $columnas = 10;
        $puntos = 0;

        for ($i = 0; $i < $filas; $i++){
            for ($j = 0; $j < $columnas; $j++){
                $posAleatoria = array_rand(POSIBILIDADES);
                $tablero[$i][$j] = POSIBILIDADES[$posAleatoria];                
            }
        }
        
        echo '<section>';
        echo '<table>';
        echo '<caption>BUSCAMINAS</caption>';
        
        for($i = 0; $i < $filas; $i++){
            echo '<tr>';
            
            for ($j = 0; $j < $columnas; $j++){
                $valor = $tablero[$i][$j];                
                if ($valor == '-'){
                    echo '<td id = "negritas">' . $valor . '</td>';
                }
                else{
                    echo '<td id = "rojo">' . $valor . '</td>';
                }                
            }
            echo '</tr>';
        }
        
        echo '</table>';    
        echo '</section>';    
        echo '<h2>Coordenadas aleatorias</h2>';
        
        do{
            $rango1 = mt_rand(0, 9);
            $rango2 = mt_rand(0, 9);
            echo '<p>[' . $rango1 + 1 . ']' . '[' . $rango2 + 1 . ']</p>';    
            $valor = $tablero[$rango1][$rango2];
            if ($valor == '-'){
                $puntos++;
            }
        } while($valor != 'B');
        
        echo '<h2>Puntos: ' . $puntos . '</h2>';
    ?>
</main>

<?php
    require_once 'html/pie.html';
?>

