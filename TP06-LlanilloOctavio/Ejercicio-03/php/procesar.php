<?php
    $ruta = '../css';
    require_once '../html/encabezado.html';
    date_default_timezone_set('America/Argentina/Buenos_Aires');    
?>

<main>
    <?php
        define('CARPETA', '../txt/');
        define ('NOMBRE_ARCHIVO', 'deudas.txt');
        define ('RUTA_ARCHIVO', CARPETA . NOMBRE_ARCHIVO);   
        $fechaActual = date('m/d/Y H:i:s');

        if (!empty($_POST['solicitar'])){

            $fechaActual = array($fechaActual);
            $datos = array_merge($_POST, $fechaActual);

            if (!file_exists(CARPETA)){
                mkdir(CARPETA);
            }        

            $archivo = fopen(RUTA_ARCHIVO, 'a');
            $linea = implode(';', $datos);
            fputs($archivo, $linea . PHP_EOL);
            fclose($archivo);

            echo '<p>Se registró exitosamente su solicitud</p>';
        }

        else if (!empty($_POST['pagar'])){
            $archivo = fopen(RUTA_ARCHIVO, 'r');
            while (!feof($archivo)){
                $linea = fgets($archivo);
                if ($linea != ''){                        
                    $linea_separada = explode(';', $linea);                        
                    if ($linea_separada[0] == $_POST['dni']){
                        $bandera = 1;
                        break;
                    }
                    else $bandera = 0;
                }
            }
            fclose($archivo);

            if ($bandera == 1){
                $monto = $linea_separada[1];
                $fechaSolicitud = $linea_separada[3];          
                $cantidadDias = ceil((strtotime($fechaActual) - strtotime($fechaSolicitud)) / (3600 * 24));                                
                $montoAPagar = $monto + ($monto * 1.5 / 100 * $cantidadDias);
                
                echo                  
                    '<h2>Cálculo de deuda</h2>
                    <p>Monto del préstamo: <strong>' . $monto . '</strong></p>
                    <p>Fecha de solicitud: <strong>'. $fechaSolicitud . '</strong></p>
                    <p>Fecha actual: <strong>' . $fechaActual . '</strong></p>
                    <p>Cantidad de días: <strong>' . $cantidadDias . '</strong></p>
                    <h2 id="rojo"><strong>Monto a pagar: ' . $montoAPagar . ' </strong></h2>';
            }
            else echo '<p>No hay deuda para este usuario</p>';
        }
        
    ?>
</main>

<?php
    require_once '../html/pie.html';
?>