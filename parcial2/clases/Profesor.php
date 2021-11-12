<?php
require_once 'Persona.php';
class Profesor extends Persona{
    public function nombre_completo(){
        echo $this->nombre. ', '. $this->apellido;
    }
}
?>