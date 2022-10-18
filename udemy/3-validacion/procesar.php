<!DOCTYPE html>
<?php
$error="faltan_datos";
if(!empty($_POST['nombre'])&& !empty($_POST['apellidos'])&& !empty($_POST['email'])&& !empty($_POST['edad'])&& !empty($_POST['password'])){
   $error="ok";
   
   $nombre=$_POST['nombre'];
   $edad=(int)$_POST['edad'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $apellidos=$_POST['apellidos'];
   
   if(!is_string($nombre)|| !preg_match("/[a-zA-Z]+/", $nombre)){
       $error='nombre';
   }
   if(!is_string($apellidos)|| !preg_match("/[a-zA-Z]+/", $apellidos)){
       $error='apellidos';
   }
   if(!is_int($edad)|| !filter_var($edad, FILTER_VALIDATE_INT)){
       $error='edad';
   }
   if(!is_string($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
       $error='email';
   }
   if(empty($password)||!preg_match("/[A-Za-z0-9]{7,}/", $password) ){
       $error='password';
   }
}else{
    $error="faltan_datos";
    header("location:index.php?error=$error");
}

if($error!="ok"){
    header("location:index.php?error=$error");
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
