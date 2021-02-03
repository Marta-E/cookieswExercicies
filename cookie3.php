<?php
setcookie('nombre','', time()-4800)
?>

<!-- lo mejor es tener la cookie delante del todo para que no hayan errores -->
<!-- se puede poner solo comillas vacias para que coja cualquier valor o $_COOKIE['nombre'] (en este caso para que referencia el valor real)  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="cookie2.php">Verificar</a>
    
</body>
</html>