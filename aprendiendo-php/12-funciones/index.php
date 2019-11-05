<?php

/* 
 * Funciones:
 * 
 * ESTRUCTURA
 * 
 * funtion nombre_Funcion($parametros){
 *      instrucciones
 * }
 * 
 * 
 * COMO INVOCAR LA FUNCION
 * 
 * nombre_Funcion($parametros);
 */


//EJEMPLO 1
function ejemplo1(){
    echo "Jose Cortez<br>";
    echo "Yosshi Vela<br>";
    echo "Mati Cortez<br>";
    echo "Daniel Gallardo<br>";
}
//invocar funcion
ejemplo1();

//EJEMPLO 2
function tabla($numero){
    echo "<h3> Tabla de multiplicar del numero : $numero </h3>";
    for($i=1;$i<=12;$i++){
        $operacion=$numero*$i;
        echo "$numero * $i = $operacion </br>";
    }
}
tabla(7);






?>
