<?php
/*
ARRAYS ES UNA COLECCION O CONJUNTO DE DATOS /VALORES
*/
$variable=array();
$variable=['Jose','Daniel','Mati'];
var_dump($variable);
var_dump($variable[1]);
echo "<h1>Listado de Nombres :</h1>";
echo "<ul>";
for($i=0;$i<count($variable);$i++){
    echo "<li>".$variable[$i]."</li>";
}
echo "</ul>";

echo "<h1>Nombres :</h1>";

foreach ($variable as $nombres){
    echo $nombres."<br>";
}

$personas=array(
    'nombre'=>'Jose',
    'apellido'=>'Cortez',
    'web'=>'jose.cortez@epn.edu.ec'
);

var_dump($personas);
        
?>
