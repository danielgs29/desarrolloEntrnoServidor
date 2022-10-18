<?php
// Start the session
session_start();
?>

<?php
// define variables and set to empty values
 $email = $lname = $fname = $password = $job= "";
 $emailErr = $lnameErr = $fnameErr = $passwordErr = $jobErr= "";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "";
  } else {
    $lname = test_input($_POST["lname"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["job"])) {
    $jobErr = "Gender is required";
  } else {
    $job = test_input($_POST["job"]);
  }
}
?>

<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Register page</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/register.css">

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
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
          <input type="password" id="password" name="password" required>
          <span></span>
          <label for="password">Password</label>
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
