<?php
trait funciones {
    public $edad1;
    public $edad2;
    public $materia1;
    public $materia2;
    public function diferencia_edad ($edad1, $edad2){
        if ($edad1>$edad2){
            $diferencia = $edad1-$edad2;
            echo '<br> <br> Hay una diferencia de '. $diferencia. 'años';
        }else if ($edad2>$edad1){
            $diferencia = $edad2-$edad1;
            echo '<br> <br> Hay una diferencia de '. $diferencia. ' años';
        }else {
            echo '<br> <br> No hay diferencia de edad';
        } 
    }
    public function comparar_materia ($materia1, $materia2){
        if ($materia1==$materia2) {
            echo '<br> <br> Son la misma materia';
        }else {
            echo '<br> <br> No son la misma materia';
        }
    }
    public function año_nacimiento ($edad1){
        $año = date("Y");
        $año = $año - $edad1;
        echo '<br> <br> El año de nacimiento es: '. $año; 
    }
}

class mostrar {
    use funciones;
}
?>
