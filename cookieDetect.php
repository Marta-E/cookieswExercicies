<?php
if(isset($_COOKIE['visita'])){
echo "Que alegría verte de nuevo.";    
}
else{

setcookie('visita','ok',time()+4800);
echo "Es tu primera visita a nuestra pag.";

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