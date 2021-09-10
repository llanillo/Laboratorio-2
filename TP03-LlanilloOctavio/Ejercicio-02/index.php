<?php
    require_once 'html/encabezado.html';    
?>

<?php
    $palabra = "ana";
    
    echo '<section>';
    echo '<p>Palabra: <p id = "negritas">' . $palabra . '</p>' . '</p>';
    
    if (esPalindromo($palabra) == 0){
        echo '<p id = "negritas">Es un palíndromo</p>';
    }
    else{
        echo '<p id = "negritas">No es un palíndromo</p>';
    }
    echo '</section>';

?>

<?php
    function esPalindromo ($palabra){
        $tamañoPalabra = strlen($palabra);
        $palabraAlReves = array_fill(0, $tamañoPalabra, '');;        
        $aux = 1;
        
        for ($i = 0 ; $i < $tamañoPalabra ; $i++){  
            $palabraAlReves[$tamañoPalabra - ($i + $aux)] = $palabra[$i];
        }                
                
        return strcmp($palabra, implode($palabraAlReves));
    }
?>

<?php
    require_once 'html/pie.html';
?>