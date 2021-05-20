<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni =  $_POST["dni"];
$fecha_nac =  $_POST["fecha_nac"];
$mail =  $_POST["mail"];
$provincia = $_POST["provincia"];
$donante = $_POST["donante"];
$acepta_term = $_POST["acepta_term"];


$personas = array (
    array($nombre,$apellido,$dni,$fecha_nac,$mail,$provincia,$donante,$acepta_term)
);


$indice = array (
    array("Nombre: ","Apellido: ","DNI: ","Fecha Nacimiento: ","Mail: ","Provincia: ","Es donante: ")
);

for ($i=0; $i < 7; $i++){
    echo $indice[0][$i]. $personas[0][$i]. "</p>";
}

 

?>  