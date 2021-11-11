<?php
    session_start();
    if(!empty($_SESSION['usuario'])){
        $ruta = '../css';
        require_once '../html/encabezado.html';
?>

<section>
    <?php
        require_once 'menu.php';
        require_once 'conexion.php';
        
        if (!empty($_POST['titulo']) && !empty($_POST['duracion']) && !empty($_POST['genero']) && !empty($_POST['fecha'])){
            $titulo = $_POST['titulo'];
            $duracion = $_POST['duracion'];
            $genero = $_POST['genero'];
            $fecha = date_format(date_create($_POST['fecha']), 'Y-m-d');
            $ubicacion = $_FILES['foto']['tmp_name'];
            $conexion = conectar();
    
            if (!empty($_FILES['foto']['size'])){
                $tmp = $_FILES['foto']['name'];
                $foto = explode('.', $tmp);
                $carpeta = '../img/portadas/';
                $nombre = $titulo. '.jpg';
        
                if(!file_exists($carpeta)) mkdir($carpeta, 0777, true);
                
                $destino = $carpeta . $nombre;
                move_uploaded_file($ubicacion, $destino);
            }
            else $nombre = null;
      
            $consulta = 'UPDATE pelicula SET titulo=\'' . $titulo . '\', duracion=' . $duracion . ', genero=\'' . $genero .'\', fecha_estreno=\'' . $fecha . '\', foto_portada=\'' . $nombre . '\' WHERE id=' . $_POST['id'];
            $resultado = mysqli_query($conexion, $consulta);
            desconectar($conexion);
        }
        else echo '<p>Faltan datos</p>';        
    ?>

    <main>
        <?php            
            if ($resultado)
                echo '<h2>Se modificó la película exitosamente</h2>';                
            else echo '<h2>Error al modificar</h2>';
            header('refresh:3; url=pelicula_listado.php');
        ?>
    </main>
</section>


<?php 
    require_once '../html/pie.html';
    }
    else header('refresh:0;url=../index.php');
?>