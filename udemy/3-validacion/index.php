<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>Validacion de formulario</title>
        <?php
        if(isset($_GET['error'])){
            $error=$_GET['error'];
            if($error=='faltan_datos'){
                echo "<strong style=color:red>Nombre invalido</strong>";
            }
             if($error=='apellidos'){
                echo "<strong style=color:red>Apellidos no validos</strong>";
            }
             if($error=='email'){
                echo "<strong style=color:red>email no valido</strong>";
            }
             if($error=='edad'){
                echo "<strong style=color:red>edad no valida</strong>";
            }
             if($error=='password'){
                echo "<strong style=color:red>introduce una contraseña de mas de 7 o mas caracteres</strong>";
            }
        }
        ?>
    </head>
    <body>
        <h1>Validar formulario en PHP</h1>
        <form method="POST" action="procesar.php">
            <label for="nombre">Nombre</label><br>
            <input type="text"name="nombre" required="required" pattern="[A-Za-z]+"><br>
            
             <label for="apellidos">Apellidos</label><br>
            <input type="text"name="apellidos" required="required" pattern="[A-Za-z]+"><br>
            
             <label for="edad">Edad</label><br>
            <input type="number"name="edad" required="required" pattern="[0-9]+"><br
                
            <label for="email">Email</label><br>
            <input type="email"name="email"required="required"><br>
            
            <label for="password">Contraseña</label><br>
            <input type="password"name="password"required="required"><br><br>
            
            <input type="submit" value="enviar">
        </form>
    </body>
</html>
