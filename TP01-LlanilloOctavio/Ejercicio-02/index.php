<?php
    require_once 'html/encabezado.html';
?>

<main>
    <?php
        echo '<h1>Compra de dólares</h1>';   
        const VALOR_INICIAL = 100;
        const VALOR_FINAL = 300;
        const IMPUESTO_PAIS = 30;
        const IMPUESTO_GANACIA = 35;
        const COTIZACION_OFICIAL = 102.50;
        $cantidad_pesos;
        $impuesto_ganancia;
        $impuesto_pais;
        $total;
        
        $cantidad_dolares = mt_rand(VALOR_INICIAL * 100, VALOR_FINAL * 100) / 100;                
        $cantidad_pesos = COTIZACION_OFICIAL * $cantidad_dolares;
        $impuesto_ganancia = $cantidad_pesos * IMPUESTO_GANACIA / 100;
        $impuesto_pais = $cantidad_pesos * IMPUESTO_PAIS / 100;
        $total = $cantidad_pesos + $impuesto_ganancia + $impuesto_pais;
        
        echo '<section>';
        echo '<p>' . 'Estás comprando '  . 'USD ' . $cantidad_dolares  . '</p>';        
        echo '<p>' . 'Cotización del dólar: $' . COTIZACION_OFICIAL . '</p>';        
        echo '<p>' . 'Subtotal: $' . number_format($cantidad_pesos, 2, ',', '.') . ' </p>';
        echo '<p>' . 'Impuesto PAIS: $' . number_format($impuesto_pais, 2, ',', '.') . '</p>';
        echo '<p>' . 'Percepción Ganacias: $' . number_format($impuesto_ganancia, 2, ',', '.') . '</p>';
        echo '<p id="negritas">' . 'Total (con impuestos): $' . number_format($total, 2, ',', '.') . '<p>';        
        echo '</section>';
    ?>    
</main>

<?php
    require_once 'html/pie.html';
?>

