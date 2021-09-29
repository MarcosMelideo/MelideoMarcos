<?php
include("config.php");
$dni = $_POST['dni'];

$result = mysqli_fetch_array(mysqli_query($mysqli, "SELECT persona.nombre, persona.apellido, colegio.nombre as colegio, colegio.direccion, colegio.numero FROM persona INNER JOIN colegio ON (persona.colegio_id = colegio.id) WHERE dni=$dni"));

if(is_array($result)){
    echo json_encode($result);


}else{
    echo json_encode("error");
}
?>