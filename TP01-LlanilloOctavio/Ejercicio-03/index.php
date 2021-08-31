<?php
    require_once 'html/encabezado.html';
?>

<main>
    <?php
        echo '<h1>' . 'Recibo de sueldo' . '</h1>';
        const APORTE_JUBILATORIO = 13;
        const OBRA_SOCIAL = 3.5;
        const TITULO = 10;
        $nombre = 'Octavio Patricio Llanillo Cabrera';
        $sueldoBruto = mt_rand(40000, 60000);
        $titulo = TITULO / 100 * $sueldoBruto;
        $sueldoBruto += $titulo;
        $aporte = $sueldoBruto * APORTE_JUBILATORIO / 100;
        $obra = $sueldoBruto * OBRA_SOCIAL / 100;
        $sueldoNeto = $sueldoBruto - $aporte - $obra;        
    ?>    
    
    <table>
        <caption><p>Empleado/a: <?php echo $nombre ?></p></caption>
        <tr>
            <th>Concepto</th><th>Ingresos</th><th>Descuentos</th>
        </tr>
        <tr>
            <td>Sueldo Bruto</td> <td>$<?php echo number_format($sueldoBruto, 2, ',', '.')?></td> <td></td>                                    
        </tr>
        <tr>
            <td>Título</td> <td>$<?php echo number_format($titulo, 2, ',', '.')?></td> <td></td>
        </tr>
        <tr>
            <td>Aporte Jubilatorio</td> <td></td> <td>$<?php echo number_format($aporte, 2, ",", ".") ?></td>
        </tr>
        <tr>
            <td>Obra Social</td> <td></td> <td>$<?php echo number_format($obra, 2, ",", ".") ?></td>
        </tr>
        <tr>
            <td id ="sueldo" colspan="3">Sueldo Neto: $<?php echo number_format($sueldoNeto, 2, ",", ".") ?></td>
        </tr>
    </table>
</main>

<?php
    require_once 'html/pie.html';
?>

