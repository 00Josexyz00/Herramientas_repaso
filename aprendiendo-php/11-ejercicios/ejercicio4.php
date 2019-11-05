<?php

/* 
 * recojer dos numero por url con get y hacer las 
 * operaciones basicas con los numeros
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1=$_GET ['numero1'];
$numero2=$_GET ['numero2'];
echo "<h1>"."Calculadora"."</h1>";
echo "suma:".($numero1+$numero2)."<br>";
echo "resta:".($numero1-$numero2)."<br>";
echo "multiplicación:".($numero1*$numero2)."<br>";
echo "division:".($numero1/$numero2)."<br>";

}else{
    echo "introduce bien los parametros por la url";
}

?>
