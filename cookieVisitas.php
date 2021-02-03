<?php
if (isset($_COOKIE['visitas'])) {
    setcookie('visitas', $_COOKIE['visitas']+1, time() + 4800);

    echo "Bienvenido! Nos has visitado ".$_COOKIE['visitas']." veces.";
} else {
    setcookie('visitas', 1, time() + 4800);
    echo "Bienvenido por primera vez a nuestra pag.";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>