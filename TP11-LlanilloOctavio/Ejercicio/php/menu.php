<?php      
    $temp = ($_SESSION['foto'] == null) ? 'usuario_default.png' : $_SESSION['foto'];
    $fotoUbicacion = '../img/usuarios/' . $temp;
?>
<aside>
    <article id="usuario">
        <figure>
            <img src="<?php echo $fotoUbicacion;?>" alt="fotoPerfil" title="fotoPerfil">
        </figure>
        <p><?php echo $_SESSION['usuario']?></p>
        <p><a href="cerrar_sesion.php">Cerrar sesión</a></p>
    </article>

    <h2>Usuarios</h2>
    <ul>
        <?php
            if($_SESSION['tipo'] == 'Administrador'){
                echo '<li><a href="usuario_alta.php">Nuevo usuario</a></li>';
            }
        ?>        
        <li><a href="usuario_listado.php">Listado usuarios</a></li>
    </ul>

    <h2>Películas</h2>
    <ul>
        <?php
            if($_SESSION['tipo'] == 'Administrador'){
                echo '<li><a href="pelicula_alta.php">Agregar película</a></li>';
            }
        ?>        
        <li><a href="pelicula_listado.php">Listado películas</a></li>
        <li><a href="pelicula_listado_favoritas.php">Listar favoritas</a></li>
    </ul>

    <h2>Opciones</h2>
    <ul>    
        <li><a href="configuracion.php">Configuración</a>
        <li><a href="contactenos.php">Contacto</a>
    </ul>
</aside>