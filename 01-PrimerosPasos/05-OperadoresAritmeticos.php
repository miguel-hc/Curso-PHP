<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
        //Suma
        $NumeroUno = 12;
        $NumeroDos = 10;
        //Realizar la suma, es nesesario ponerlos en () de lo contrario no Realizara la operacion
        echo "La suma es: ".($NumeroUno + $NumeroDos);
        echo "<br/>";
        
        //Resta
        echo "La resta es: ".($NumeroUno - $NumeroDos);
        echo "<br/>";
        
        //Multiplicacion 
        echo "La Multiplicacion es: ".($NumeroUno * $NumeroDos);
        echo "<br/>";

        //Division
        echo "La Division es: ".($NumeroUno / $NumeroDos);
        echo "<br/>";

        //Modulo o Resto
        echo "La Division es: ".($NumeroUno % $NumeroDos);
        echo "<br/>";
    ?>
</body>
</html>