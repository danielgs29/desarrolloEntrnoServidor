<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logout</title>
    </head>
    <body>
        <?php
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy(); 
        ?>
        <p> Logout successful!</p>
    <br>
    <p>Hope to see youu back soon!</p>
    </body>
</html>
