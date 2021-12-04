<?php
    require '../html/cabecera.html';
    require '../html/menu.html';
?>

<?php
    require 'funciones-conexion.php';
    $conexion = conectar();
    //hacer controles
    if (!empty($_GET['id'])){
        // completar código
        $consulta = 'SELECT * FROM infracciones WHERE id = \'' . $_GET['id'] . '\'';        
        $resultado = mysqli_query($conexion, $consulta);
        desconectar($conexion);
        if ($resultado){
            $fila = mysqli_fetch_array($resultado);
?>
    <main>
        <h3>Actualizar infracción</h3>
        <form action="actualizar_aceptar.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <label for="nombre_conductor">Nombre del Conductor</label>
            <input type="text" name="nombre_conductor" value="<?php echo $fila['nombre_conductor']; ?>" id="nombre_conductor" maxlength="100" required><br>
            <label for="nombre_agente">Nombre del Agente</label>
            <input type="text" name="nombre_agente" value="<?php echo $fila['nombre_agente']; ?>" id="nombre_agente" maxlength="100" required><br>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" value="<?php echo $fila['fecha']; ?>" id="fecha" required><br>
            <label for="lugar">Lugar</label>
            <input type="text" name="lugar" value="<?php echo $fila['lugar']; ?>" id="lugar" maxlength="100" required><br>
            <label for="tipo_infraccion">Tipo de Infracción</label>
            <input type="text" name="tipo_infraccion" value="<?php echo $fila['tipo_infraccion']; ?>" id="tipo_infraccion" maxlength="50" required><br>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" accept="image/*" required><br>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php 
        }
        else {
            echo '<p>Error al buscar la infracción</p>';
            header('refresh:5;url=../index.php');
        }
    }
    else{
        echo '<p>Error al seleccionar, el id está vacío</p>';
        header('refresh:5;url=../index.php');
    }
        require '../html/pie.html';
    ?>
</body>
</html>