<main>
    <form action="usuario_modificar_aceptar.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <h1>Editar usuario</h2>
            <input type="hidden" name="id" value="<?php echo $fila['id'];?> ">
            <label for="nombre">Nombre completo:
                <input id="nombre" name="nombre" value="<?php echo $fila['usuario']; ?>" type="text" required>
            </label>
            <label for="clave">Contraseña:
                <input id="clave" name="clave" value="" type="password" required>
            </label>
            <label for="mail">Correo electrónico:
                <input id="mail" name="mail" value="<?php echo $fila['mail']; ?>" type="email" required>
            </label>
            <label for="tipo">Tipo:
                <select id="tipo" name="tipo">
                    <option value="Administrador">Admin</option>
                    <option value="Editor">Editor</option>
                    <option value="Restringido">Restringido</option>                        
                </select>
            </label>
            <label for="foto">
                <input id="foto" name="foto" type="file" accept="image/*">
            </label>
            <section class="botones">
                <input id="cargar" name="cargar" type="submit">
                <a href="usuario_listado.php">
                    <input type="button" id="cancel" value="Cancelar">
                </a>
            </section>
        </fieldset>
    </form>
</main>