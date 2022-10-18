<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Connection test</title>
    </head>
    <body>
        
       <?php
       	require_once 'connect.php';
       
       
       $sql="SELECT nombre, precio_venta FROM producto WHERE gama='Frutales' ORDER BY nombre,precio_venta";
       
       $result = mysqli_query($conn, $sql);
     
       if (mysqli_num_rows($result) > 0) {
           echo "<table>";
           echo" <tr>";
           echo "<th>Name</th>";
           echo "<th>Price</th>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo " <td>$row[nombre]</td>";
            echo " <td>$row[precio_venta]</td>";
           
            }
        } else {
        echo "No results";
        }

       ?>
        
        
       
    </body>
</html>