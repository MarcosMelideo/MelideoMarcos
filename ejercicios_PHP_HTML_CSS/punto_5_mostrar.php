<?php
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$dni =  $_GET["dni"];
$personas = array (
    array($nombre,$apellido,$dni)
);

echo "Nombre | Apellido | DNI <br>";
echo  $personas [0][0]." | ".$personas[0][1]." | ".$personas[0][2];
?>  