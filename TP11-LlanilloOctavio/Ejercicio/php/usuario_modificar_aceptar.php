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
        
        if (!empty($_POST['nombre']) && !empty($_POST['mail']) && !empty($_POST['tipo'])){
            $nombre = $_POST['nombre'];
            $clave = sha1($_POST['clave']);
            $mail = $_POST['mail'];
            $tipo = $_POST['tipo'];                    
            $ubicacion = $_FILES['foto']['tmp_name'];
            $conexion = conectar();
    
            if (!empty($_FILES['foto']['size'])){
                $tmp = $_FILES['foto']['name'];                
                $carpeta = '../img/usuarios/';
                $foto = $nombre. '.jpg';
        
                if(!file_exists($carpeta)) mkdir($carpeta, 0777, true);
                
                $destino = $carpeta . $foto;
                move_uploaded_file($ubicacion, $destino);
            }
            else $foto = null;
            
            $consulta = 'UPDATE usuario SET usuario=\'' . $nombre . '\', password=\'' . $clave . '\', mail=\'' . $mail .'\', tipo=\'' . $tipo . '\', foto=\'' . $foto . '\' WHERE id=' . $_POST['id'];            
            $resultado = mysqli_query($conexion, $consulta);
            desconectar($conexion);
        }
        else echo '<p>Faltan datos</p>';        
    ?>

    <main>
        <?php            
            if ($resultado)
                echo '<h2>Se modificó el usuario exitosamente</h2>';                
            else echo '<h2>Error al modificar</h2>';
            header('refresh:3; url=usuario_listado.php');
        ?>
    </main>
</section>


<?php 
    require_once '../html/pie.html';
    }
    else header('refresh:0;url=../index.php');
?>