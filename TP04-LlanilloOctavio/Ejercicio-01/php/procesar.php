<?php
    $ruta = '../css';
    require_once '../html/encabezado.html';
?>

<?php                
    if(isset($_POST['Cargar'])){
        
        $apellido = $_POST['apellidos'];
        $nombre = $_POST['nombres'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $tipo = $_POST['tipo'];

        if (empty($apellido))
            echo '<p>No se introdujeron los apellidos</p>';
        else{
            if (empty($nombre))
                echo '<p>No se introdujeron los nombres</p>';
            else{
                if (empty($usuario))
                    echo '<p>No se introdujo un usuario</p>';
                else{
                    if (empty($clave))
                        echo '<p>No se introdujo una clave</p>';
                    else{
                        if (empty($tipo))
                            echo '<p>No se eligió un tipo</p>';
                        else{                            
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
                            echo                '</tr>
                                            </tbody>
                                    </table>
                                </section>';
                        }
                    }
                }
            }
        }
    }
    else{
        require_once '../html/cuerpo.html';
    }
?>