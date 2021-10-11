<?php
    $ruta = '../css';
    require_once '../html/encabezado.html'; 
?>

<main>    
    <form method="post" action="procesar.php">
        <fieldset>
            <label for="dni">DNI:
                <input id="dni" name="dni" value="Ingrese su DNI" type="number" minlength="7" maxlength="9" required>
            </label>
            <label for="monto">Monto:
                <input id="monto" name="monto" type="number" required>
            </label>
            <input id="solicitar" type="submit" name="solicitar">        
        </fieldset>
    </form>
</main>

<?php
    require_once '../html/pie.html';
?>