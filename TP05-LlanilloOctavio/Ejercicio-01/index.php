<?php
    $ruta = 'css';
    require_once 'html/encabezado.html';
?>

<main>
    <form action="php/juego.php" method="post">
        <label for="nombre">Nombre:
            <input id="nombre" name="nombre" type="text" required>
        </label>
        <input type="submit" value="Cargar" name="cargar">
    </form>
</main>

<?php
    require_once 'html/pie.html';
?>

