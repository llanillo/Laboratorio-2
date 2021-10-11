
<?php
    function seleccionarCarta(){
        $tipoCarta = ['pica', 'trebol', 'corazon', 'diamante'];
        return $tipoCarta[array_rand($tipoCarta)];
    }
?>