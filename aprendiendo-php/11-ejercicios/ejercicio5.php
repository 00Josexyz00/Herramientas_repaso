<?php

/* 
 * Hacer un programa que muestre todos los numeros
 * que hay entre dos numeros que lleguen por la url
 */
if(isset($_GET['num1'])&&isset($_GET['num2'])){
    $numero1=$_GET['num1'];
    $numero2=$_GET['num2'];
    for($i=$numero1;$i<$numero2;$i++){
        echo $i."<br>";
    }
}else{
    echo "LOS PARAMETROS GET NO EXISTEN";
}
?>

