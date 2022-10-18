<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My First PHP</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        echo '<h1>Welcome</h1>';
        print "<img src=\"images/Clock-PNG-Pic.png\"id=\"clock\"> </br>";
        $hora=date('h:i:s A');
        $digito1=$hora[0]; 
        $digito2=$hora[1];
        $letra=$hora[9];
        
        if($digito1===0 && $digito2<=4 && $letra==="A" ){
            echo "Good Evening </br>";
        }
        else if( $digito1===0 && $digito2>5 && $digito2<=9 && $letra==="A"){
            echo "Good Morning </br>";
        }
        else if($digito1===0 && $digito2<=9 && $letra==="P"){
            echo "Good Afternoon </br>";
        }
        else{
            echo "Good Evening </br>";
        }
        
         echo " It is: $hora</br>";
        ?>
    </body>
</html>
