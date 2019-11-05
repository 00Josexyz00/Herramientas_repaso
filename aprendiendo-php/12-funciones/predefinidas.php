<?php

//Debuggear devolver
$nombre ="Jose Cortez";
echo var_dump($nombre);
///fechas
echo date('d-m-y').'<br>';
echo date('d-M-y');
echo "raiz cuadrada".sqrt(10);
echo "<br>";
echo "numero aleatorio: ".rand(10,40);
echo "<br>";
echo "Numero pi: ".pi();

echo "<br>";
echo "redondear:  ".round(7.894578,2);

// funciones generales
echo "<br>";
echo gettype($nombre);
echo "<br>";
//detectar tipado
if (is_string($nombre)){
    echo " ESA VARIABLE ES UN STRING";
}
//comp`robar si esiste una variable 
echo "<br>";
if (!is_float($nombre)){
    echo "La variable no es un numero decimal";
}
//limpiar espacios
$frase="      mi contenido     ";
var_dump(trim($frase));

//eliminar variables o indices de arreglos
$year =2020;
unset($year);
//comporvar variable vacia

$texto="   ";

if(empty(trim($texto))){
    echo "La variable texto esta vacia";
}else{
    echo "La variable texto Tiene contenido";
}
echo "<br>";

//contar caracteres de una cadena
$cadena = "123456";
echo strlen($cadena);
echo "<br>";


//Encontrar caracteres o palabra

$frase ="La vida es bella";
$buscar="vida";
echo strpos($frase,$buscar);
echo "<br>";

//remplzar contenido de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase."<br>";
//mayuscullas minusculas
echo strtolower($frase)."<br>";
echo strtoupper($frase);


