<?php
$pais= $_GET['pais'];

$prov_argentina = array ("Buenos Aires", "Catamarca", "Chaco", "Chubut", "Cordoba", "Corrientes", "Entre Rios", "Formosa", "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquen", "Rio Negro", "Salta", "San Juan", "San Luis", "Santa Cruz", "Santa Fe", "Sgo. del Estero", "Tierra del Fuego", "Tucuman");

$dep_uruguay = array ("Artigas", "Canelones", "Cerro Largo", "Colonia", "Durazno", "Flores", "Florida", "Lavalleja", "Maldonado", "Montevideo", "Paysandú", "Río Negro", "Rivera", "Rocha", "Salto", "San José", "Soriano", "Tacuarembó", "Treinta y Tres");

if ($pais=="Argentina") {
    echo json_encode($prov_argentina);
}else {
    echo json_encode($dep_uruguay);
}

?>











