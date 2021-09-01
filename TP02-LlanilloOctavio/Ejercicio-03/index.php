<?php
    require_once 'html/encabezado.html';
?>

<main>
    <h1>CRIPTOMONEDAS</h1>        
    
    <?php
        $dinero = mt_rand(10000, 50000);
        const COTIZACION_DOGE = 25.95;
        $cantidadCripto = number_format($dinero/COTIZACION_DOGE, 8, ',', '.');
        echo '<h2>Efectivo: ' . '<p id = "negritas">$ ' . $dinero . '</p>' . '</h2>';
        echo '<p>Compraste: </p>';
        echo '<p id = "azul">' . $cantidadCripto . '</p>';
    ?>
</main>

<?php
    require_once 'html/pie.html';
?>

