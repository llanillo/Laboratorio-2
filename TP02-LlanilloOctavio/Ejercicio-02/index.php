<?php
    require_once 'html/encabezado.html';
?>

<?php
    $numero = mt_rand(1, 3);
    
    switch ($numero){
        case 1:
            require_once 'html/asideA.html';
            break;
        case 2:
            require_once 'html/asideB.html';
            break;
        case 3:
            require_once 'html/asideC.html';
            break;
    }
?>

<?php
    require_once 'html/pie.html';
?>

