<?php
    require_once 'html/encabezado.html';
?>

<section>
    <main>
        <section>
            <article>
                <h2>Subir archivo</h2>
                <form action="php/guardar.php" method="post" enctype="multipart/form-data">
                    <label for="iddesc">Descripción breve: </label>
                        <input type="text" name="descripcion" id="iddesc" required>
                    <label for="idarchivo">Archivo: </label>
                        <input type="file" name="foto" id="idarchivo" accept="image/*" required>
                    <input type="submit" value="Subir!">
                </form>
            </article>
        </section>
    </main>
</section>

<?php
    require_once 'html/pie.html';
?>