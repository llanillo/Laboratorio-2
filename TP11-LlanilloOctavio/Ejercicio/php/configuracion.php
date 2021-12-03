<?php 
    session_start();
    if (!empty($_SESSION['usuario'])){    
        $ruta = '../css';
        require_once '../html/encabezado.html';
?>

<section>

    <?php 
        require_once 'menu.php';            
    ?>

    <h2>Configuración</h2>

    <form action="configuracion_ok.php" method="post">
        <input type="radio" name="color" value="estilo">Clásico
        <figure class="figure-form">
            <img  src="../img/clasico.jpg">
        </figure>
        <input type="radio" name="color" value="moderno">Moderno
        <figure class="figure-form">
            <img src="../img/moderno.jpg">
        </figure>
        <section>
            <input type="submit" value="Aceptar">            
        </section>
    </form>


</section>


<?php 
        require_once '../html/pie.html';

    }
    else header ('refresh:0;url=../index.php');
?>