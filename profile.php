<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
    </head>
    <body>
        

        Welcome <?php echo $_POST["fname"]; ?><br>
        Your email address is: <?php echo $_POST["email"]; ?><br>
        Your car is: <?php echo $_POST["cars"]; ?>
        <?php
        $cookie_name = "user";
        $cookie_value = $_POST["fname"];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        $_SESSION["session_email"] = $_POST["email"];        
        ?>
        <br>
        <a href="logout.php">Logout</a>
    </body>
</html>
