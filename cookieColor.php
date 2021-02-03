<?php
$color = "white";

if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('color', $color, time() + 4800);
} else {
    if (isset($_COOKIE['color'])) {
     
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body <?php    echo "style= 'background-color:$color'"; ?>>



    <form action="cookieColor.php" method="post">
        <label for="color">Escoge tu color</label>
        <select name="color">
            <option value="red ">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
            <option value="yellow">Amarillo</option>
            <option value="black">Negro</option>
        </select>
        <input type="submit" value="Cambiar color">
    </form>
</body>

</html>