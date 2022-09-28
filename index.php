<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>My first project</title>
    </head>
    <body>
        
        <h1>Your teacher's first project</h1>
        
        
        <a href="register.php">Register</a>

        <?php
        $cookie_name = "user";
     
if(!isset($_COOKIE[$cookie_name])) {
    echo "Username is not set!";
} else {
    echo "Username is set!<br>";
    echo "Welcome, " . $_COOKIE[$cookie_name];
}  

if(isset($_SESSION['session_email'])) {
    echo "<br>Your e-mail is: ".$_SESSION['session_email'];
}
//$_SESSION["session_email"] = "";        
        ?>
    </body>
</html>
