<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>hola mundo<h1>";
        
        $hora=date('h:i:s A');
        echo date('h:i:s A');
        $car1= substr($hora, 0,1);
        $car4= substr($hora, 1,2);
        $car2= substr($hora, 9,10);
        $car3=substr($car2, 0,1);
        echo $car1;
        echo $car4;
        echo $car2;
        echo $car3;
        
        if ($car1>=1  && $car3==p){
            echo 'good';
            
        }
      
        ?>
    </body>
</html>
