<?php
    $ruta = '../css';
    $img = '../img';
    require_once '../html/encabezado.html';    

    const NOMBRE_ARCHIVO = 'alumnos.txt';
    const RUTA_ARCHIVO = '../txt/' . NOMBRE_ARCHIVO;
    
    if (!empty($_POST['dni'])){
        $archivo = fopen(RUTA_ARCHIVO, 'r');
        while(!feof($archivo)){
            $linea = fgets($archivo);
            if ($linea != ''){
                $lineaSeparada = explode(';', $linea);                
                if ($lineaSeparada[0] == $_POST['dni']){
                    $bandera = 1;
                    $dni = $lineaSeparada[0];
                    $nombre = $lineaSeparada[1];
                    $carrera = $lineaSeparada[2];       
                    break;             
                }
                else $bandera = 0;
            }
        }

        if ($bandera == 0) echo '<p>No se encontró ningún usuario con ese DNI</p>';        
        else{            
            date_default_timezone_set('America/Argentina/Buenos_Aires');
            $hora = date('d/m/y H:i');
            echo 
            '<main>                
                <h2>Constancia Alumno Regular</h2>
                <p class="der"><strong>Fecha y hora de impresión: ' . $hora . '</strong></p>
                <p class ="texto">
                    Por la presente se deja constancia que el/la alumno/na <strong>' . $nombre .'</strong>, DNI: <strong>' . $dni . '</strong> es alumno/a regular <br> de la carrera <strong>' . $carrera .'</strong>.
                </p> 
        
                <p class="texto">
                    Las autoridades de la Facultad de Ciencias Exactas y Tecnología expiden la siguiente constancia <br> para ser presentada donde corresponda.
                </p>                    
            </main>';
        }
    }
    else header('refresh: 5; url=../index.php');       
?>

<?php
    require_once '../html/pie.html';
?>