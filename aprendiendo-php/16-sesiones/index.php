<?php

/*
sesion almacena y persiste los datos ientras que navega en un sitio web hasta 
que cierre sesion o cierra el navegador.
*/


//iniciar sesiones

session_start();
//variable normal
$variable_normal="Cadena de texto de prueba";
//variable de sesion
$_SESSION['variable_persistente']="variable de sesion";


echo $variable_normal."<br>";
echo $_SESSION['variable_persistente']."<br>";

?>

