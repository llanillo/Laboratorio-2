<?php 
    session_start();
    if (!empty($_SESSION['usuario'])){
?>
<main>
    <form action="pelicula_modificar_aceptar.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <h1>Editar película</h2>
                <input type="hidden" name="id" value="<?php echo $fila['id'];?> ">
                <label for="titulo">Título:
                    <input id="titulo" name="titulo" value="<?php echo $fila['titulo']; ?>" type="text" required>
                </label>
                <label for="duracion">Duración:
                    <input id="duracion" name="duracion" value="<?php echo $fila['duracion']; ?>" type="number" required>
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
                    <input id="foto" name="foto" type="file" accept="image/*">
                </label>
                <section class="botones">
                    <input id="cargar" value="Modificar" type="submit">
                    <a href="pelicula_listado.php">
                    <input type="button" id="cancel" value="Cancelar">
                    </a>
                </section>
            </fieldset>
        </form>
    </main>

<?php 
    }
    else header('refresh:0;url=../index.php');
?>