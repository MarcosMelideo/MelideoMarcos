<?php
require 'Interfaces.php';
class Transporte implements Automovil 
{
    public function getColor()
    {
        echo "xd <br>";
    }
    public function getRuedas()
    {
        echo "asd";
    }
};

$transporte = new Transporte();
$transporte->getColor();
$transporte->getRuedas();
?>