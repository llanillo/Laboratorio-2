<?php
    require_once 'html/encabezado.html';
    include_once 'php/funciones.php';
?>

<main>
    <?php        
        $numero = mt_rand(1, 13);
        $valorAleatorio = seleccionarCarta();
        
        echo '<p><strong>Naipe Barajado: </strong></p>';        
    ?>
    <figure>
        <img src="img/<?php echo $numero . '-' . $valorAleatorio . '.jpg'?>" alt="Naipe">
    </figure>
</main>

<?php
    require_once 'html/pie.html';
?>

