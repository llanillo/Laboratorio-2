<?php 
    $ruta = '../css';
    require_once '../html/encabezado.html';
?>

<section>
    <?php         
        require_once 'menu.php';
        require_once 'conexion.php';
        $conexion = conectar();
    ?>

    <main>        
        <form action="insercion.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <h1>Nueva película</h2>
                <label for="titulo">Título:
                    <input id="titulo" name="titulo" value="" type="text" required>
                </label>
                <label for="duracion">Duración:
                    <input id="duracion" name="duracion" value="" type="number" required>
                </label>
                <label for="genero">Genéro:
                    <select id="genero" name="genero">
                        <option value="Accion">Accion</option>
                        <option value="Comedia">Comedia</option>
                        <option value="Terror">Terror</option>
                        <option value="etc">etc</option>
                    </select>
                </label>
                <label for="fecha">Fecha de estreno:
                    <input id="fecha" name="fecha" type="date" required>
                </label>
                <label for="foto">
                    <input id="foto" name="foto" type="file" accept="image/*" required>
                </label>
                <input id="cargar" name="cargar" type="submit">
            </fieldset>
        </form>
    </main>
</section>

<?php 
    require_once '../html/pie.html';
?>