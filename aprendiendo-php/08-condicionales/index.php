<?php

/* 
 condicionales 
 if(condicion){
    instruccion
 } else {
    otras cinstrucciones
 }
 * 
 ==igual
 ===identico
 != diferente
 <> diferente
 !== no identico
 
 */

//case

$variable;
switch ($variable){
    case 1:
        break;
    case 2:
        break;
    default :
        break;
}


//GOTO
goto marca;

echo '<h1>Instruccion1</h1>';
echo '<h1>Instruccion2</h1>';
echo '<h1>Instruccion3</h1>';
echo '<h1>Instruccion4</h1>';
marca:
echo "Me salto los 4 echos";

