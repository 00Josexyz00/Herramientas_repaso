<?php

/* 
 * Imprimir por pantalla todas las tablas  de multiplicar y
 *  mostrar las tablas en un tabla html.
 */



echo "<table border='1'><tr>";//inicio de la tabla 
echo "<tr>";//fila uno de celdas
    for($cabecera = 1;$cabecera<=12;$cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
echo "</tr>";//inicio fila 1 celdas
    
    echo "<tr>";//inicio fila 2 de celdas
    
        
    for($i=1;$i<=12;$i++){
        echo "<td>";
            for($x=1;$x<=12;$x++){
                 echo "$i x $x = ".($i*$x)."<br>";
            }
        echo "</td>";
    }
        
    echo "</tr>";//cierre fila 2 celdas

echo "</table>";//fin de la tabla


?>