<?php
$fecha = date("d.m.y | H:i:s");
setcookie('fecha', $fecha, time() + 4800);

if(isset($_COOKIE['fecha'])){
    echo "Jelou! Nos visitaste el: ".$_COOKIE['fecha'];
    }
else{
    echo "Bienvenido! Es la primera vez que nos visitas.";
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