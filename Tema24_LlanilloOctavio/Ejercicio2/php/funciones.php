<?php      
    function sumaMensual ($mes){         
        $ruta = 'txt/alquiladas.txt';      
        $archivo = fopen($ruta, 'r');
        $sumaMensual = 0;
        while(!feof($archivo)){
            $linea = fgets($archivo);
            if ($linea != ''){
                $lineaSeparada = explode(';', $linea);
                $mesPago = date_format(date_create($lineaSeparada[2]), 'm');
                if ($mes == $mesPago) $sumaMensual += $lineaSeparada[1];
            }
        }
        fclose($archivo);
        return $sumaMensual;
    }
?>