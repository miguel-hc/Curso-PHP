<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        //Variables globales
        //variable de servidor

        //con esto veremos la direccion ip del servidor
        echo "<h3>".$_SERVER['SERVER_ADDR']."</h3>";

        //con esto veremos el nombre domino
        echo "<h3>".$_SERVER['SERVER_NAME']."</h3>";

        //con esto veremos el software que nos brinda el servicio
        echo "<h3>".$_SERVER['SERVER_SOFTWARE']."</h3>";
        
        //con esto veremos el nombre del navegador que utilizamos
        echo "<h3>".$_SERVER['HTTP_USER_AGENT']."</h3>";

        //sacar la direccion del usuario que esta accediendo a la pagina
        echo "<h3>".$_SERVER['REMOTE_ADDR']."</h3>";
    ?>
</body>
</html>