<?php
require_once 'Persona.php';
class Alumno extends Persona{
    public function nombre_completo(){
        echo '<br> <br>'. $this->nombre. ', '. $this->apellido;
    }
}

?>