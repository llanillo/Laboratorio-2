<?php
    session_start();
    if(!empty($_SESSION['usuario'])){    
        $ruta = '../css';      
?>

<section>    
    <?php
        require_once '../html/encabezado.html';        
        require_once 'menu.php';  
    ?>    

    <main>
        <h1>Contáctenos</h1>
        <form action="envio_mail.php" method="post" id="contacto">
            <label for="motivo">Motivo</label>
            <select id="motivo" name="motivo">
                <option value="sugerencia">Sugerencia</option>
                <option value="reclamo">Reclamo</option>
            </select>

            <label for="mensaje">Mensaje</label>
            <textarea rows="30" cols="30" id="mensaje" name="mensaje"></textarea>        
                
            <input type="submit" value="Enviar">        
        </form>
        </main>

</section>
<?php
      require_once '../html/pie.html';
    }
    else header('refresh:0;url=../index.php');
?>