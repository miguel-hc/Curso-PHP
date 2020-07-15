<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constante</title>
</head>
<body>
    <?php
        //Es un contenedor de informacion de no puede varia, se decalra de la siguente manera
        define('Nombre', 'TuNombre');
        //MOstrar una constante, para mostrar una constante no se debe colocar el "$".
        echo Nombre;

        echo PHP_OS;
    ?>
</body>
</html>