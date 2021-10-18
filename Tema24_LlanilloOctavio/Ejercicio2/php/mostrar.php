<?php     
    date_default_timezone_set('America/Argentina/Buenos_Aires');   
    $mesActual = date('m');
    $mesLetra = date_format(date_create(date('m/d/Y H:i:s')), 'M');
?>

<main>
    <section>
        <?php echo '<h2>Monto a pagar del del mes (' .$mesActual . ') ' . $mesLetra . '</p>'; ?>
    </section>

    <?php 
        require_once 'funciones.php';
        $total = sumaMensual($mesActual);

        echo '<h2>' . $total . '</h2>';
    ?>
</main>