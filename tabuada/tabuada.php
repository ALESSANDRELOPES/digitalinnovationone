<?php

    /*
        Programa: tabuada
        @autor: Alessandre Lopes
        @data: 02/02/2021
    */

    $numeros= array(1,2,3,4,5,6,7,8,9,10);


                echo '<h1>Tabuada em PHP - Multiplicação.</h1> <br><br> ';
            
                for($i = 0; $i <=9;$i++)
                {
                    
                    echo 'Tabuada do Numero: ', $numeros[$i];
                    echo '<br>';
                    echo '<br>';
                    for($j = 0; $j<=9;$j++)
                    {
                        $resultado= $numeros[$i] * $numeros[$j];
                        echo $numeros[$i] .' * '. $numeros[$j].' = '.$resultado;   
                        echo '<br>';
                        
                    }    
                        
                }
?>