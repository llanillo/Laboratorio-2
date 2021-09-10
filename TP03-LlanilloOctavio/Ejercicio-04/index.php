<?php
    include 'html/encabezado.html';
?>

<main>
    <h1>Recaudación Estacionamiento</h1>        
    <?php
        $tarifas = ['motos' => 50, 'autos' => 90, 'camionetas' => 110];
        $cantMotos = 0;
        $cantAutos = 0;
        $cantCamionetas = 0;
        $cantVehiculos = 600;
        $dineroMotos = 0;
        $dineroAutos = 0;
        $dineroCamionetas = 0;        
        
        for ($i = 0; $i < $cantVehiculos; $i++){
            $indice = array_rand($tarifas);
            switch ($indice){
                case 'motos':
                    $cantMotos++;
                    $dineroMotos += $tarifas[$indice] * 2;
                    break;
                case 'autos':
                    $cantAutos++;    
                    $dineroAutos += $tarifas[$indice] * 2;
                    break;
                case 'camionetas':
                    $cantCamionetas++;
                    $dineroCamionetas += $tarifas[$indice] * 2;
                    break;
            }
        }
        
        $dineroTotal = $dineroAutos + $dineroMotos + $dineroCamionetas;
        echo '<section>';
        echo '<p>Cantidad de motos: ' . $cantMotos . '. Recaudación: ' + $dineroMotos . '</p>';
        echo '<p>Cantidad de autos: ' . $cantMotos . '. Recaudación: ' + $dineroAutos . '</p>';
        echo '<p>Cantidad de camionetas: ' . $cantMotos . '. Recaudación: ' + $dineroCamionetas . '</p>';
        echo '<p id = "rojo">Total vehículos: ' . $cantVehiculos . '</p>';
        echo '<p id = "rojo">Recaudación del día: ' . $dineroTotal . '</p>';
        echo '</section>';
    ?>
    
    <?php
        function cantVehiculosAleatorios ($maxmimo){

            
        }
    ?>

</main>

<?php
    require_once 'html/pie.html';
?>

