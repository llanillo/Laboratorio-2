<?php
    require_once 'html/encabezado.html';    
?>

<main>
    <?php
        require_once('php/funciones.php');
        $participante1 = aleatorioSinRepetir(6, 1, 45);
        $participante2 = aleatorioSinRepetir(6, 1, 45);
        $participante3 = aleatorioSinRepetir(6, 1, 45);
        $participante4 = aleatorioSinRepetir(6, 1, 45);        
        $sorteo = aleatorioSinRepetir(6, 1, 45);
        
        $aciertos1 = cantidadSemejantesEnArreglos($participante1, $sorteo);
        $aciertos2 = cantidadSemejantesEnArreglos($participante2, $sorteo);
        $aciertos3 = cantidadSemejantesEnArreglos($participante3, $sorteo);
        $aciertos4 = cantidadSemejantesEnArreglos($participante4, $sorteo);
    ?>
        
    <section>
        <article>
            <table>
                <tbody>
                    <tr><td><figure><img src="img/usuario.png" alt="Usuario"></figure></td></tr>                                
                    <tr><td>Participante 1</td></tr>
                    <tr>
                        <td id="azul">
                        <?php  
                            foreach($participante1 as $value){
                                echo $value . ' ';
                            }
                        ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr><td><figure><img src="img/usuario.png" alt="Usuario"></figure></td></tr>                                
                    <tr><td>Participante 2</td></tr>
                    <tr>
                        <td id="azul">
                        <?php  
                            foreach($participante2 as $value){
                                echo $value . ' ';
                            }
                        ?>
                        </td>
                    </tr>
                </tbody>
            </table>
                    <table>
                <tbody>
                    <tr><td><figure><img src="img/usuario.png" alt="Usuario"></figure></td></tr>                                
                    <tr><td>Participante 3</td></tr>
                    <tr>
                        <td id="azul">
                        <?php  
                            foreach($participante3 as $value){
                                echo $value . ' ';
                            }
                        ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr><td><figure><img src="img/usuario.png" alt="Usuario"></figure></td></tr>                                
                    <tr><td>Participante 4</td></tr>
                    <tr>
                        <td id="azul">
                        <?php  
                            foreach($participante4 as $value){
                                echo $value . ' ';
                            }
                        ?>
                        </td>
                    </tr>
                </tbody>
            </table>     
        </article>

        <article>
            <table>
                <tbody>
                    <tr><td><figure><img src="img/Quini-6.png" alt="Usuario"></figure></td></tr>
                    <tr>
                        <td id="negritas">
                        <?php  
                            foreach($sorteo as $value){
                                echo $value . ' ';
                            }
                        ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>

    <?php
        echo '<p>Participante 1: <strong>' . $aciertos1 . '</strong></p>';
        echo '<p>Participante 2: <strong>' . $aciertos2 . '</strong></p>';
        echo '<p>Participante 3: <strong>' . $aciertos3 . '</strong></p>';
        echo '<p>Participante 4: <strong>' . $aciertos4 . '</strong></p>';
    ?>
</main>

<?php
    require_once 'html/pie.html';
?>