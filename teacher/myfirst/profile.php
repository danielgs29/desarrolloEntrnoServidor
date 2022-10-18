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
        Please upload your Profile photo<br>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
         Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>
        <br>
        
        <a href="logout.php">Logout</a>
    </body>
</html>