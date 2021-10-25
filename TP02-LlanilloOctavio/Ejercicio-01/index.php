<?php
    require_once 'html/encabezado.html';
?>

<main>
    <h1>9 Y MEDIO</h1>

    <?php        
        $carta1 = mt_rand(0, 12);
        $carta2 = mt_rand(0, 12);
        asignarMensaje($carta1, $mensaje1);
        asignarMensaje($carta2, $mensaje2);      
        $puntuacion = valorCarta($mensaje1) + valorCarta($mensaje2);
        
        echo '<p> Naipe 1: ' . '<p id = "negritas">' . $mensaje1 . '</p>' . '</p>';
        echo '<p> Naipe 2: ' . '<p id = "negritas">' .$mensaje2 . '</p>' . '</p>';       
        
        if ($puntuacion != 9.5){
            echo '<p PUNTOS OBTENIDOS: ' . '<p id = "negritas">' . $puntuacion . '</p>' . '</p>';   
        }        
        else{
            echo '<p id = "negritas"> GANADOR </p>';
        }            
    ?>    
    
    <?php        
        function valorCarta($carta){            
            if ($carta == "Sota" || $carta == "Caballo" || $carta == "Rey"){                            
                $valor = 0.5;
            }
            else{
                $valor = $carta;
            }    
            return $valor;
        }
    ?>
    
    <?php
        function asignarMensaje($carta, &$mensaje) {
            switch ($carta){
                case 10:
                    $mensaje = "Sota";
                    break;
                case 11:
                    $mensaje = "Caballo";
                    break;
                case 12:
                    $mensaje = "Rey";
                    break;
                default:
                    $mensaje = $carta;
           }
        }
    ?>
</main>

<?php
    require_once 'html/pie.html';
?>

