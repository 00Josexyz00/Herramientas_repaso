<?php
$cantantes=['2pac','Drake','Jennifer Lopez','Alfredo'];
$numeros=[9,7,5,4,8,1,3];

asort($cantantes);
var_dump($cantantes);

arsort($cantantes);
var_dump($cantantes);

sort($numeros);
var_dump($numeros);

$cantantes[]='Natos';
var_dump($cantantes);

array_push($cantantes,'Waor');
var_dump($cantantes);

array_pop($cantantes);
var_dump($cantantes);

unset($cantantes[1]);
var_dump($cantantes);

echo array_rand($cantantes);
//dar la vuelta al arreglo
var_dump(array_reverse($numeros));
//buscar en el array
array_search('Alfredo',$cantantes);
//contar elementos
echo count($numeros);

echo sizeof($numeros);


?>
