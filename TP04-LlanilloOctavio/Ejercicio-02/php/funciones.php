<?php
    function aleatorioSinRepetir ($cantidad, $desde, $hasta){
        $arregloNumeros = [];

        for ($i = 0; $i < $cantidad; $i++){
            do{
                $numero = mt_rand($desde, $hasta);
            } while(in_array($numero, $arregloNumeros));
            
            $arregloNumeros[$i] = $numero;
        }
        return $arregloNumeros;
    }

    function cantidadSemejantesEnArreglos ($arreglo1, $arreglo2){
        $cantidad = 0;
        for ($i = 0; $i < count($arreglo2); $i++){
            if ($arreglo1[$i] == $arreglo2[$i])
                $cantidad++;
        }
        return $cantidad;
    }
?>