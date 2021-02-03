<?php

$persona =array("Nana", "Woke", "4", "Tarragona", "Independent" );
setcookie("cookie[nombre]",$persona[0],time()+4800);
setcookie("cookie[apellidos]",$persona[1],time()+4800);
setcookie("cookie[edad]",$persona[2],time()+4800);
setcookie("cookie[ciudad]",$persona[3],time()+4800);
setcookie("cookie[alineamiento]",$persona[4],time()+4800);

echo "<br/> El nombre es: ".$_COOKIE['cookie']['nombre'];
echo "<br/> El apellido es: ".$_COOKIE['cookie']['apellidos'];
echo "<br/> La edad es: ".$_COOKIE['cookie']['edad'];
echo "<br/> La ciudad es: ".$_COOKIE['cookie']['ciudad'];
echo "<br/> Su posición política es: ".$_COOKIE['cookie']['alineamiento'];

?>