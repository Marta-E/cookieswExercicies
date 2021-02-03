<?php

$nombre = $_POST['nombre'];

setcookie('nombre', $nombre, time() + 4800);


?>
<a href="cookie2.php"> Verificar</a>