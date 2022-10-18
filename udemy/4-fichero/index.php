
        <?php
        
     /*   $archivo= fopen("texto.txt","r+");
        
        //leer todas las lineasde contenido
        while (!feof($archivo)){
        $contenido= fgets($archivo);
        echo $contenido."<br>";
        }
        
       fwrite($archivo,"meto texto");
        
        fclose($archivo);
     */   
        
        //copiar fichero
       // copy("texto.txt","copiado.txt") or die("Error al copiar");
        
        //renombrar
        //rename("copiado.txt","renombrado.txt");
        
        //eliminar
        //unlink("renombrado.txt") or die("Error al borrar");
        
        //saber si existe
        
        if(file_exists("texto.txt")){
            echo 'existe';
        }else{
            echo 'no existe';
        }
        ?>
 
