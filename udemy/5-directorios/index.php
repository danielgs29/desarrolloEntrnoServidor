<?php

if(!is_dir("mi_carpeta")){
mkdir("mi_carpeta",0777)or die("no se puede crear la carpeta");
}else{
    echo 'ya existe la carpeta';
}

//rmdir("mi_carpeta");

echo " <hr> <h1>Contenido Carpeta</h1>";
if($gestor= opendir('./mi_carpeta')){
    while(false!==($archivo= readdir($gestor))){
        if($archivo != '.'&&$archivo!='..'){
            echo $archivo."<br>";
        }
    }
}
