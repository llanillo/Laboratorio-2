<?php
    $ruta = '../css';    
    require_once '../html/encabezado.html';
    require_once 'funciones.php';
?>

<main>
    <h1>9 Y MEDIO</h1>

    <?php        
        $carta1 = mt_rand(1, 12);
        $carta2 = mt_rand(1, 12);
        $mensaje1 = asignarMensaje($carta1, $mensaje1);
        $mensaje2 = asignarMensaje($carta2, $mensaje2);      
        $puntuacion = valorCarta($mensaje1) + valorCarta($mensaje2);
        
        echo '<p> Naipe 1: ' . '<strong>' . $mensaje1 . '</strong>' . '</p>';
        echo '<p> Naipe 2: ' . '<strong>' .$mensaje2 . '</strong>' . '</p>';       
        
        if ($puntuacion != 9.5){
            echo '<p> PUNTOS OBTENIDOS: ' . '<strong>' . $puntuacion . '</strong>' . '</p>';   
        }        
        else{
            echo '<p><strong> GANADOR </strong></p>';
        }                    
    ?>    
<?php
    define('RUTA_CARPETA', '../txt/');
    define ('NOMBRE_ARCHIVO', 'puntaje.txt');
    define ('RUTA_ARCHIVO', RUTA_CARPETA . '/' . NOMBRE_ARCHIVO);

    if (!empty($_POST['nombre'])){    
        $datos = array($_POST['nombre'], $puntuacion);            

        if (!file_exists(RUTA_CARPETA)) mkdir(RUTA_CARPETA);
        
        $archivo = fopen(RUTA_ARCHIVO, 'a');
        $linea = implode(";", $datos);
        fputs($archivo, $linea . PHP_EOL);
        fclose($archivo);        
    }

    $archivo = fopen(RUTA_ARCHIVO, 'r');
    $puntaje_mayor = array ('Ninguno', '0');    

    while (!feof($archivo)){
        $linea = fgets($archivo);
        if ($linea != ''){
            $linea_separada = explode(';' , $linea);
            if ($linea_separada[1] > $puntaje_mayor[1])
                $puntaje_mayor = $linea_separada;
        }        
    }    
?>
    <section>
        <h2>Mejor puntaje</h2>
        <p class="blanco">Jugador: <?php echo $puntaje_mayor[0]?></p>
        <p class="blanco">Puntaje: <?php echo $puntaje_mayor[1]?> </p>
    </section>
</main>

<?php
    require_once '../html/pie.html';
?>

