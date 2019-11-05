<?php

/*
 *cookies: Es un fichero que se almacena e el ordenador del usuario
 * que visita la web, con el fin de recordar datos o rastrear el 
 * comportamiento del mismo en la web
 *  */

//crear cookies

//setcookie("nombre","valor que solo puede ser texto",cadicidad, ruta ,dominio);


//cookie basica
setcookie("micookie","valor de mi galleta");

//cookie con expiracion
setcookie("unyear","valor de mi cookie de 365 dias", time()+(60*60*24*365));


header('Location:ver_cookies.php');

?>

