<?php

/*
Variables locales: usadas solo dentro e una funcion
 */
/*
 variables globales permite acceder dese cualquier lado pero si esta dentro de una funccion
 * se debe anteponer la palabra global para decir que e suna variable global
 * 
 */
$frase= "Holi variables globales";

echo $frase;
function holavariables(){
    global $frase;
    echo "<h1> $frase </h1>";
}

holavariables();

function buenosDias(){
    return "buenos dias";
}
function buenasTardes(){
    return "Holi boroli";
}
function buenasNoches(){
    return "good night";
}
$horario = "buenasNoches";

echo $horario();

?>

