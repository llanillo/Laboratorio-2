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
        $fecha = date_create($_POST['fecha']);
        $fecha = date_format($fecha, 'd-M');
        


        $origen = $_FILES['archivo']['tmp_name'];
        $destino = '../img/apellido.jpg';
        move_uploaded_file($origen, $destino);

        echo 
        '<section>
            <table>            
                <thead>
                    <tr>
                        <th><figure><img src="../img/apellido.jpg" alt="foto"></figure></th>
                        <th><h2>' . $apellido . ', </h2></th>
                        <th><h2>' . $nombre . '</h2></th>                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><figure><img id="peq" src="../img/usuario.png" alt="usuario"></figure></td>
                        <td>Usuario:</td> 
                        <td><strong>' . $usuario . ' (' . $tipo . ')</strong></td>
                    </tr>
                    <tr>
                        <td><figure><img id="peq" src="../img/torta.png" alt="cumpleaños"></figure></td>
                        <td>Cumpleaños:</td>
                        <td><strong>' . $fecha . '</strong></td>
                    </tr>
                </tbody>
            </table>
        </section>';
    }
    else{
        echo '<p>Faltan datos por introducir</p>';    
        header('refresh: 5; url=../index.php')    ;
    }
?>