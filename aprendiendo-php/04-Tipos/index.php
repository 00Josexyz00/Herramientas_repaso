<?php
    /*
     * Tipos de datos 
     * Entero(int / integer)
     * coma flotante /decimal (float / double)
     * cadenas (string)
     * booleano(bool)
     * null
     * Array(colleccion de datos)
     * Objetos
     */
$numero=10;

echo  $numero;
echo "<br>";
echo gettype($numero);

$decimal=27.9;
$texto="Texto"."<br>";
$verdadero=false;
$nula=null;
echo gettype($decimal)."<br>";
echo gettype($texto)."<br>";
echo gettype($verdadero)."<br>";
echo gettype($nula)."<br>";
?>
