<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subir archivos</title>
    </head>
    <body>
        <h1>subir archivos con PHP</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="archivo"/>
            <input type="submit" name="Enviar"/>
        </form>
    </body>
</html>
