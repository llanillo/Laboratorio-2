<?php
    $ruta = '../css';
    require_once '../html/encabezado.html';
?>
<?php
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    if (!empty($usuario) && !empty($clave)){
        echo '<p><strong>Usuario: ' . $usuario . '</strong></p>';
        echo '<p><strong>Usuario: ' . $clave . '</strong></p>';
    }
?>

<?php
    require_once '../html/pie.html';
?>