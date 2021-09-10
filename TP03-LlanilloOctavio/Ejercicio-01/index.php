<?php
    require_once 'html/encabezado.html';
?>

<main>
    <h1>Inserte algún título</h1>

    <?php        
        $numero = mt_rand(0, 1000);                                
        $suma = esNarcicista($numero);
        
        echo '<p> Número: ' . '<p id = "negritas">' . $numero . '</p>' . '</p>';
        echo '<p> Cálculo: ' . '<p id = "negritas">' . $suma . '</p>' . '</p>';
        
        if ($suma == $numero)
            echo '<h2> Número narcicista! </h2>';
        else
            echo '<h2> No es un número narcicista! </h2>';
    ?>    
    
    <?php
        function contarDigitos ($numero){
            $aux = $numero;
            $contador = 0;
            
            while ($aux > 0){                
                $aux = (int) ($aux/10);
                $contador++;
            }
            return $contador;
        }
        
        function esNarcicista ($numero){
            $suma = 0;
            $digitos = contarDigitos($numero);    
            $aux = $numero;
            
            while ($aux > 0){     
                $ultimoDig = $aux % 10;
                $suma += pow ($ultimoDig, $digitos);
                $aux = (int) ($aux/10);
            }       
            return $suma;
        }
    ?>
    
    
</main>

<?php
    require_once 'html/pie.html';
?>

