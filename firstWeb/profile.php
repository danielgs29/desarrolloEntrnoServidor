<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

 <?php  
       if(isset($_POST['submit'])){
           $name=$_POST['fname'];
           $lastname=$_POST['lname'];
           $job=$_POST['job'];
           $email=$_POST['email'];
           setcookie('name', $name, time() + (86400 * 30), "/");
           $_COOKIE['name'] = $name;
           setcookie('lastname', $lastname, time() + (86400 * 30), "/");
            $_COOKIE['lastname'] = $lastname;
           setcookie('job', $job, time() + (86400 * 30), "/");
            $_COOKIE['job'] = $job;
           setcookie('email', $email, time() + (86400 * 30), "/");
            $_COOKIE['email'] = $email;
       }
      // else{
        //   header("location: register.php");
      // }
       // ?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="css/profile.css">
    </head>
    <body>
         
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
                              <a class="nav-link active" href="profile.php">Profile</a>
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
            <div class="profile-box">
                <img src="images/menu.png" class="menu-icon">
                <img src="images/setting.png" class="setting-icon">
                <img src="images/profile-pic.png" class="profile-pic">
                <?php echo "<h3>". $_COOKIE['name']." ".$_COOKIE['lastname']."</h3>"?>
                <?php echo "<p>".$_COOKIE['job']."</p>"?>
                <div class="social-media">
                    <img src="images/instagram.png">
                    <img src="images/telegram.png">
                    <img src="images/dribble.png">
                </div>
                <button type="button">Follow</button>
                <div class="profile-bottom">
                    <p>Learn More About My Profile</p>
                    <img src="images/arrow.png">
                </div>
            </div>
        </div>
          <div class="footer">
            <p>Daniel Gómez Web All Rights Reserved</p>
       </div>
    </body>
</html>
