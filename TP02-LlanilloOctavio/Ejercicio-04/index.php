<?php
    include 'html/encabezado.html';
?>

<body>
    <?php
        define ('IVA', 0.21);
        const DESCUENTO = 0.15;
        $minRand = 10;
        $maxRand = 100;
        
        echo '<p>------------- SIMULACIÓN DE COMPRAS -------------</p>';
        echo '<p> Valor de IVA: ' . IVA * 100 . '%' . '</p>';
        echo '<p> Valor de DESCUENTO: ' . DESCUENTO * 100 . '%' . '</p>';
        
        echo '<p> Valor del primer producto sin IVA: $';
        $primerProducto = mt_rand($minRand * 10, $maxRand * 10) / 10;
//        $primerProducto = 734.2; Comprobación con el PDF
        echo $primerProducto . '<br>';
        
        echo '<p> Valor del segundo producto sin IVA: $';
        $segundoProducto = mt_rand($minRand * 10, $maxRand * 10) / 10;
//        $segundoProducto = 196.1; Comprobación con el PDF
        echo $segundoProducto . '<br>';
        
        echo '<p> Total sin IVA: $';
        $totalSinIva = $primerProducto + $segundoProducto;
        echo number_format($totalSinIva, 1, ',', '.') . '<p>';
        
        echo '<p> Total aplicando IVA: $';
        $totalConIva = ($primerProducto + $segundoProducto) * (1 + IVA) ;
        echo number_format($totalConIva, 1, ',', '.') . '<p>';        
        
        echo '<p> Total aplicando Descuento del ' . DESCUENTO * 100 . '%' . ': $';
        $totalConDescuento = $totalConIva * (1 - DESCUENTO);
        echo number_format($totalConDescuento, 1, ',', '.') . '<p>';  
    ?>
</body>

<?php
    require_once 'html/pie.html';
?>

