<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/logout.css"rel="stylesheet">
    </head>
    <body>
        <?php
        session_unset();
        session_destroy();
        if (isset($_COOKIE['name'])) {
        unset($_COOKIE['name']);
        setcookie('name', '', time() - 3600, '/');
        }
        if (isset($_COOKIE['lastname'])) {
        unset($_COOKIE['lastname']);
        setcookie('lastname', '', time() - 3600, '/');
        }
        if (isset($_COOKIE['email'])) {
        unset($_COOKIE['email']);
        setcookie('email', '', time() - 3600, '/');
        }
        if (isset($_COOKIE['job'])) {
        unset($_COOKIE['job']);
        setcookie('name', '', time() - 3600, '/');
        }
        
         // if(!isset($_POST['submit'])){
         //header("location: index.php");
       //}
        ?>
         <nav class="navbar navbar-expand-sm bg-light navbar-light">
                <div class="container-fluid">
                     <ul class="navbar-nav">
                         <li class="nav-item">
                           <a class="nav-link active" href="index.php">Login</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" href="register.php">Register</a>
                         </li>
                          <li class="nav-item">
                           <a class="nav-link active" href="logout.php">Logout</a>
                         </li>
                      </ul>
                    <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
                 </div>
            </nav>
        
        <div class="container">
        <h1>Logout Succesful. Hope to see you soon!
        </div> 
        <div class="footer">
            <p>Daniel Gómez Web All Rights Reserved</p>
       </div>
    </body>
</html>
