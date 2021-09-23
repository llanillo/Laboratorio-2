<?php
    $ruta = '../css';
    require_once '../html/encabezado.html';
?>
<?php
    define('RUTA_CARPETA', '../txt/');
    define ('NOMBRE_ARCHIVO', 'usuarios.txt');
    define ('RUTA_ARCHIVO', RUTA_CARPETA . '/' . NOMBRE_ARCHIVO);

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    if (!empty($usuario) && !empty($clave)){
        echo '<p><strong>Usuario: ' . $usuario . '</strong></p>';
        echo '<p><strong>Usuario: ' . $clave . '</strong></p>';

        $archivo = fopen(RUTA_ARCHIVO, 'r');
        $inicioSesion = false;

        while(!feof($archivo)){
            $linea = fgets($archivo);
            if($linea != ''){
                $linea_separada = explode(';', $linea);
                if ($linea_separada[0] == $linea_separada[1]) $inicioSesion = true;
            }            
        }

        if ($inicioSesion) require_once '../html/principal.html';        
        else header('refresh:3;url=../index.php');
    }
?>

<?php
    require_once '../html/pie.html';
?>