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
        for ($i = 0; $i < count($arreglo1); $i++){
            if (in_array($arreglo1[$i], $arreglo2))
                $cantidad++;
        }
        return $cantidad;
    }
?>