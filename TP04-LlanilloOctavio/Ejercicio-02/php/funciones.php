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

    function cantidadEnArreglo ($valorBuscar, $arreglo = []){
        $cantidad = 0;
        foreach ($arreglo as $valor){
            if ($valor == $valorBuscar)
                $cantidad++;
        }
        return $cantidad;
    }
?>