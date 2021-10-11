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
            <input id="pagar" type="submit" value="Pagar Prestamo" name="pagar">        
        </fieldset>
    </form>
</main>

<?php
    require_once '../html/pie.html';
?>