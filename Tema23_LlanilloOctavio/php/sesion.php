<?php
    session_start();    
    require '../html/cabecera.html';
    require '../html/menu.html';
?>

<?php
    require 'funciones-conexion.php';    
    if (!empty($_POST['nombre_agente']) && !empty($_POST['fecha'])){        
        $conexion = conectar();    
        $consulta = 'SELECT * FROM infracciones WHERE nombre_agente = \'' . $_POST['nombre_agente'] . '\' AND fecha = \'' . $_POST['fecha'] . '\'';             
        $resultado = mysqli_query($conexion, $consulta);
        desconectar($conexion);
        if ($resultado && mysqli_num_rows($resultado) == 1){     
            $fila = mysqli_fetch_array($resultado);
            $_SESSION['nombre_agente'] = $fila['nombre_agente'];
            $_SESSION['fecha'] = $fila['fecha'];
            require 'estado_sesion.php';
?>
    <main>

    </main>

<?php 
    }
    else {
        echo '<p>Error al buscar el agente </p>';
        header('refresh:3;url=consulta23.php');
    }
}
else{
    echo '<p>Faltan datos</p>';
    header('refresh:5;url=../index.php');
}
    require '../html/pie.html';
?>
</body>
</html>