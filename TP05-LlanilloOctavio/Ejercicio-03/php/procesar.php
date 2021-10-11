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
        $archivo = fopen(RUTA_ARCHIVO, 'r');
        $inicioSesion = false;
        while(!feof($archivo)){
            $linea = fgets($archivo);
            if($linea != ''){
                $linea_separada = explode(';', $linea);                
                if (($linea_separada[0] == $usuario) && ($linea_separada[1] == $clave)) $inicioSesion = true;                
            }            
        }        
        if ($inicioSesion) require_once '../html/principal.html';                          
        else{
            echo '<p>Datos incorrectos</p>';
            header('refresh:5;url=../index.php');
        }            
    }
?>

<?php
    require_once '../html/pie.html';
?>