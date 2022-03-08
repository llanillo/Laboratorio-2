<section>
    <?php
        require_once '../html/cabecera.html';
        require_once '../html/menu.html';
        require_once 'funciones-conexion.php';
        
        if (!empty($_POST['id']) && !empty($_POST['nombre_conductor']) && !empty($_POST['nombre_agente']) && !empty($_POST['lugar']) && !empty($_POST['fecha']) && !empty($_POST['tipo_infraccion'])){
            $nombre_conductor = $_POST['nombre_conductor'];
            $nombre_agente = $_POST['nombre_agente'];
            $fecha = date_format(date_create($_POST['fecha']), 'Y-m-d');            
            $lugar = $_POST['lugar'];
            $tipo_infraccion = $_POST['tipo_infraccion'];            
            $conexion = conectar();
            
            if (!empty($_FILES['foto']['size'])){
                $tmp = $_FILES['foto']['name'];
                $foto = explode('.', $tmp);
                $carpeta = '../fotos/';
                $nombre = $nombre_conductor. '_' . $fecha . '.' . $foto[1];
                
                if(!file_exists($carpeta)) mkdir($carpeta, 0777, true);
                
                $destino = $carpeta . $nombre;
                $ubicacion = $_FILES['foto']['tmp_name'];
                move_uploaded_file($ubicacion, $destino);
            }
            else $nombre = null;                

            $consulta = 'UPDATE infracciones SET nombre_conductor=\'' . $nombre_conductor . '\', nombre_agente=\'' . $nombre_agente . '\', fecha=\'' . $fecha .'\', tipo_infraccion=\'' . $tipo_infraccion . '\', foto=\'' . $nombre . '\' WHERE id=' . $_POST['id'];
            $resultado = mysqli_query($conexion, $consulta);            
            desconectar($conexion);
        }
        else{
            echo '<p>Faltan datos</p>';
            header('refresh:3; url=listar-infracciones.php');
        }       
    ?>

    <main>
        <?php            
            if ($resultado)
                echo '<h2>Se modificó la infracción exitosamente</h2>';                
            else echo '<h2>Error al modificar</h2>';
            header('refresh:3; url=listar-infracciones.php');
        ?>
    </main>
</section>
