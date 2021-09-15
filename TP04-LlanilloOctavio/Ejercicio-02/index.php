<?php
    require_once 'html/encabezado.html';    
?>

<main>
    <?php
        require_once('php/funciones.php');
        $participante1 = aleatorioSinRepetir(6, 1, 45);
        $participante2 = aleatorioSinRepetir(6, 1, 45);
        $participante3 = aleatorioSinRepetir(6, 1, 45);
        $participante4 = aleatorioSinRepetir(6, 1, 45);
        $sorteo = aleatorioSinRepetir(6, 1, 45);
    ?>
    <section>
        <table>
            <tbody>
                <tr><td>imagen</td></tr>                                
                <tr><td>Participante 1</td></tr>
                <tr><td></td></tr>
            </tbody>
        </table>
    </section>
</main>

<?php
    require_once 'html/pie.html';
?>