<?php
    require_once 'html/encabezado.html';
?>

<main>
    <?php
        $tipoCarta = ['pica', 'trebol', 'corazon', 'diamante'];
        $numero = mt_rand(1, 13);
        $valorAleatorio = $tipoCarta[array_rand($tipoCarta)];
        
        echo '<p><strong>Naipe Barajado: </strong></p>';        
    ?>
    <figure>
        <img src="img/<?php echo $numero . '-' . $valorAleatorio . '.jpg'?>" alt="Naipe">
    </figure>
</main>

<?php
    require_once 'html/pie.html';
?>

