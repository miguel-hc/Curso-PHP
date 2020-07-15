<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Recursos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Recursos/bootstrap/css/bootstrap.css">
    <script src="..//Recursos/bootstrap/js/bootstrap.min.js"></script>
    <script src="..//Recursos/bootstrap/js/bootstrap.js"></script>
    <script src="..//Recursos/bootstrap/js/jquery-3.5.1.min.js"></script>
    <title>Formulario con Php</title>
</head>
<body>
    <h1>Formulario en Php</h1>
    <form action="01.2-recivir.php" method="POST">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>
        
        <input type="submit" value="enviar">
    </form>
            
</body>
</html>