<?php        
    function valorCarta($carta){
        $valor = 0;
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
        return $mensaje;
    }
?>