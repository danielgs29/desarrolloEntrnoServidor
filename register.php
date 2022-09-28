
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1> 
        <form action="profile.php" method="post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="email">E-mail:</label><br>
            <input type="text" name="email"><br><br>
            
            <label for="cars">Choose a car:</label>
            <select id="cars" name="cars">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="fiat">Fiat</option>
              <option value="audi">Audi</option>
            </select>
              <br>
              
            <p>Choose your favorite Web language:</p>
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="html">HTML</label><br>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">CSS</label><br>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">JavaScript</label><br><br>
            <br>
  
           <input type="submit" value="Submit">
        </form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "profile.php".</p>
       
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
