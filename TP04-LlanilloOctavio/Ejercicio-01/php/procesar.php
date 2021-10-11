<?php
    $ruta = '../css';
    require_once '../html/encabezado.html';
?>

<?php                
    if (!empty($_POST['apellidos']) && !empty($_POST['nombres']) && !empty($_POST['usuario']) && !empty($_POST['clave']) && !empty($_POST['tipo'])){
        $apellido = $_POST['apellidos'];
        $nombre = $_POST['nombres'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $tipo = $_POST['tipo'];

        echo '<section>
        <table>
            <caption>Listado de usuarios</caption>
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' . $usuario . '</td>' . '<td>' . $apellido . '</td>' . '<td>' . $nombre . '</td>' .'<td>' . $tipo . '</td>';
        echo '</tr></tbody></table></section>';
    }
    else{
        echo '<p>Faltan datos por introducir</p>';    
        header('refresh: 5; url=../index.php');
    }
?>