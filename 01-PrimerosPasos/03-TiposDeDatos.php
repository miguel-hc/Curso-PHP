<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
    <?php
        /*
        Tipos de Datos
            *Entero - int  1,23,4,557.
            *Flotante - float  3.1416, 45.25, 85.56.
            *Cadena String - "Cadena de texto".
            *Boleano - bool - true o false
            *Array (Coleccion de datos)
            *Objeto
        */
        //variable tipo int
        $entero = 20;
        //comprobamos con la funcion gettype esta funcion nos dira el tipo de dato
        echo gettype($entero);
        echo "<br/>";
        //Flotante
        $decimal = 3.45;
        echo gettype($decimal);
        echo "<br/>";
        //String
        $string = "texto";
        echo gettype($string);
        echo "<br/>";
        var_dump($string);
    ?>
</body>
</html>