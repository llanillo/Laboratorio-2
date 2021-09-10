<?php
    require_once 'html/encabezado.html';
?>

<?php
    $palabra = "palabra";
    
    echo '<p>Palabra: <p id = "negritas">' . $palabra . '</p>' . '</p>';
    
    if (esPalindromo($palabra)){
        echo '<p id = "negritas">Es un palíndromo</p>';
    }
    else{
        echo '<p id = "negritas">No es un palíndromo</p>';
    }

?>

<?php
    function esPalindromo ($palabra){
        $palabraAlReves;
        for ($i = 0 ; $i < strlen($palabra) ; $i++){
            $palabraAlReves[$i] = $palabra[$i];
        }
        
        return strcmp($palabra, $palabraAlReves);
    }
?>
<?php
    require_once 'html/pie.html';
?>