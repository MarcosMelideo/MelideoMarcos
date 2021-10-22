<?php
include("config.php");
$dni = $_POST["dni"];

$resultado = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM personas WHERE dni=$dni"));

if(is_array($resultado)){
    echo json_encode($resultado);
}else{
    echo json_encode("error");
}
?>