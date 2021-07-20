<?php
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

if($usuario === "" || $contraseña === ""){
    echo json_encode("error");
}else{
    echo json_encode ("Ingresado con exito: <br>Usuario: ".$usuario."<br>Contraseña: ".$contraseña);
}

?> 