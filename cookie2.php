<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_COOKIE['nombre'])) {
        echo "la cookie tiene el valor: " . $_COOKIE['nombre'];
    } else {
        echo "La cookie no está iniciada.";
    }
    ?>

    <a href="cookie3.php"> Cerrar sesión</a>
</body>

</html>