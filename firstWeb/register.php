<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Register page</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/register.css">
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
                      </ul>
                    <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
                 </div>
            </nav>

        </div>
        
         <div class="center">
         <h1>Register</h1>
         <form action="profile.php" method="post">
        <div class="txt_field">
          <input type="text" id="fname" name="fname" required>
          <span></span>
          <label for="fname">First name</label>
        </div>
        <div class="txt_field">
          <input type="text" id="lname" name="lname" required>
          <span></span>
          <label for="lname">Last name</label>
        </div>
          <div class="txt_field">
          <input type="text" id="job" name="job" required>
          <span></span>
          <label for="job">Job</label>
           </div>
          <div class="txt_field">
          <input type="text" id="email" name="email" required>
          <span></span>
          <label for="email">Email</label>
        </div>
             <input type="submit" value="submit" name="submit">
      </form>
    </div>
        
         <div class="footer">
            <p>Daniel Gómez Web All Rights Reserved</p>
       </div>
    </body>
</html>
