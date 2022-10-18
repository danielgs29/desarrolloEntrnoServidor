<?php

// la sesion almacena datos del usuario mientras que navega en el sitio web hasta que cierra el navegador

//iniciar la sesion
session_start();

$_SESSION['persistente']="soy una sesion activa";
//funciona en cualquier pagina

session_destroy();
//cierra la sesion y borra las variables


// las cookies se guardan en el ordenador del usuario para recordar datos o rastrear el comportamiento de ste en la web

//setcookie("nombre","valor que solo puede ser texto",caducidad,ruta,dominio);

setcookie("micookie","valor de la cookie");
setcookie("unaño","valor de la cookie",time()+(60*60*24*365)); //cookie que dura un año

//mostrar las cookies

if(isset($_COOKIE['micookie'])){
    echo "<h1>$_COOKIE[micookie]<h1>";
}
else{
    echo 'no existe la cookie';
}

//asi se borra la cookie
if(isset($_COOKIE['micookie'])){
    unset($_COOKIE["micookie"]);
    setcookie('micookie','', time()-100);
}
else{
    echo 'no existe la cookie';
}