<?php
    include 'html/encabezado.html';
?>

<main>
    <h1>Registro Automor de la Provincia de Tucumán</h1>        
    <h2>Patente generada: </h2>
    <?php
        const PATENTE = AE;
        $primeraLetra = asignarLetra();
        $segundaLetra = asignarLetra();
        $valorPatente = sprintf("%03s", mt_rand(1, 999));
        
        echo '<p>' . PATENTE . $valorPatente . $primeraLetra . $segundaLetra . '</p>';
    ?>
    
    <?php
        function asignarLetra (){
            $numAleatorio = mt_rand(70, 90);
            return chr ($numAleatorio);
        }
    ?>

</main>

<?php
    require_once 'html/pie.html';
?>

