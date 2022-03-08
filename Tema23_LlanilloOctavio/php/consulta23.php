<?php
    require '../html/cabecera.html';
    require '../html/menu.html';
?>

    <main>
        <h2>Consulta sobre Preferencia</h2>
        <form action="sesion.php" method="POST" class="consulta">
            <label for="agente">Nombre Agente</label>
                <input type="text" name="nombre_agente" id="agente">
            <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha">
            <input type="submit" value="Guardar">
        </form>
    </main>
</body>
</html>

<?php 
    require_once '../html/pie.html';
?>