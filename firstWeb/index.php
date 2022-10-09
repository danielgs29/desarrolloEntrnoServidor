<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>My Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <div class="welcome">
            
        
           <?php
            $hora=date('H:i:s A');
            $digito1=$hora[0]; 
            $digito2=$hora[1];
            $letra=$hora[9];
        
            if($digito1==0){
                if($digito2<=5){
                    echo "<h1>Good Evening<h1>";
                }
            }
            elseif ($digito1==0) {
                if($digito2>5){
                     echo "<h1>Good Morning<h1>";
                }
            }
            elseif ($digito1==1) {
                if($digito2<3){
                     echo "<h1>Good Morning<h1>";
                }
            }
            elseif ($digito1==1) {
                if($digito2>3){
                     echo "<h1>Good Evening<h1>";
                }
            }
             elseif ($digito1==2) {
                     echo "<h1>Good Evening<h1>";
             }
         
            ?>
            <?php
             if(isset($_COOKIE['name'])) {
                echo "<h1>"."Welcome, ".$_COOKIE['name']."</h1>";
            }  
            if(!isset($_COOKIE['name'])) {
                echo "<h1>Welcome</h1>";
            }  
             echo "<h2>$hora<h2>";
      
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
                              <a class="nav-link active" href="profile.php">Profile</a>
                        </li>
                      </ul>
                    <form class="d-flex">
                         <input class="form-control me-2" type="text" placeholder="Search">
                         <button class="btn btn-primarye" type="button">Search</button>
                     </form>
                 </div>
            </nav>

        </div>
        <div class="center">
            <h1>Login</h1>
            <form method="post">
                 <div class="txt_field">
                  <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
                <input type="submit" value="login" name="login">
        <div class="signup_link">
          Not a member? <a href="register.php">Register</a>
        </div>
      </form>
    </div>
      
       <div class="footer">
            <p>Daniel Gómez Web All Rights Reserved</p>
       </div>
    </body>
</html>

            
