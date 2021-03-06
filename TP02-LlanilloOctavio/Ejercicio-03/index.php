<?php
    require_once 'html/encabezado.html';
?>

<main>
    <h1>CRIPTOMONEDAS</h1>        
    
    <?php
        $criptoElegida = 'SOL';
        $dinero = mt_rand(10000, 50000);
        const COTIZACION_DOGE = 25.95;
        const COTIZACION_BITCOIN = 4528602.88;
        const COTIZACION_ETH =  298969.91;
        const COTIZACION_ADA = 244.14;
        const COTIZACION_DOT = 2291.50;
        const COTIZACION_SOL = 7193.23;
        const COTIZACION_FIL = 6885.51;
        const COTIZACION_USDT = 97.98;
        $cantDoge = number_format($dinero/COTIZACION_DOGE, 8, ',', '.');
        $cantBitcoin = number_format($dinero/COTIZACION_BITCOIN, 8, ',', '.');
        $cantEth = number_format($dinero/COTIZACION_ETH, 8, ',', '.');
        $cantAda = number_format($dinero/COTIZACION_ADA, 8, ',', '.');
        $cantDot = number_format($dinero/COTIZACION_DOT, 8, ',', '.');
        $cantSol = number_format($dinero/COTIZACION_SOL, 8, ',', '.');
        $cantFil = number_format($dinero/COTIZACION_FIL, 8, ',', '.');
        $cantUsdt = number_format($dinero/COTIZACION_USDT, 8, ',', '.');
        echo '<h2>Efectivo: ' . '<p id = "negritas">$ ' . $dinero . '</p>' . '</h2>';
        echo '<p>Puedes comprar: </p>';
        switch ($criptoElegida){
            case 'DOT':
                echo '<p id = "azul">' . $cantDot . '<strong> Polkadot coins</strong>'. '</p>';
                break;
            case 'DOGE':
                echo '<p id = "azul">' . $cantDoge .  '<strong> Doge coins</strong>'. '</p>';
                break;
            case 'BTC':
                echo '<p id = "azul">' . $cantBitcoin . '<strong> Bitcoin coins</strong>'. '</p>';
                break;
            case 'ETH':
                echo '<p id = "azul">' . $cantEth . '<strong> Ethereum coins</strong>'. '</p>';
                break;
            case 'ADA':
                echo '<p id = "azul">' . $cantAda . '<strong> Cardano coins</strong>'. '</p>';
                break;
            case 'SOL':
                echo '<p id = "azul">' . $cantSol . '<strong> Solanium coins</strong>'. '</p>';
                break;
            case 'FIL':
                echo '<p id = "azul">' . $cantFil . '<strong> File coins</strong>'. '</p>';
                break;
            case 'USDT':
                echo '<p id = "azul">' . $cantUsdt . '<strong> Tether coins</strong>'. '</p>';
                break;
        }
    ?>
</main>

<?php
    require_once 'html/pie.html';
?>

