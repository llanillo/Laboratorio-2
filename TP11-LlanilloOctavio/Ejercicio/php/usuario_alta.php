<?php
    session_start();
    if(!empty($_SESSION['usuario']) && $_SESSION['tipo'] == "Administrador"){    
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
        <form action="usuario_alta_ok.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <h1>Nuevo usuario</h2>
                <label for="nombre">Nombre completo:
                    <input id="nombre" name="nombre" value="" type="text" required>
                </label>
                <label for="clave">Contraseña:
                    <input id="clave" name="clave" value="" type="password" required>
                </label>
                <label for="mail">Correo electrónico:
                    <input id="mail" name="mail" value="" type="email" required>
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
                <input id="cargar" name="cargar" type="submit">
            </fieldset>
        </form>
    </main>
</section>

<?php 
      require_once '../html/pie.html';
    }
    else header('refresh:0;url=../index.php');
?>