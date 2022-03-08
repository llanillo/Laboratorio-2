<?php        
    if(!empty($_SESSION['nombre_agente']) && !empty($_SESSION['fecha'])){
        echo '<p>Nombre del agente: ' . $_SESSION['nombre_agente'] . '</p>';
        echo '<p>Fecha: ' . $_SESSION['fecha'] . '</p>';
        echo '</br>';
        echo '<h2>Guardado exitoso en la sesión</h2>';
    }
    else{
        echo '<p>Error al buscar el agente </p>';
        header('refresh:5;url=consulta23.php');
    }     
?>