<?php
   class Coche {
        public $modelo;
        public $color;
        public $vellocidad;
        public function __construct($modelo,$color,$velocidad){
            $this->modelo = $modelo;
            $this->color = $color;
            $this->velocidad = $velocidad;
        }

        public function mostrar_info () {
            $info = '<h1> Informacion del coche </h1>';
            $info .= 'Modelo: ' . $this->modelo . '<br>';
            $info .= get_color() . '<br>';
            //$info .= 'Color: ' . $this->color . '<br>';
            $info .= 'Velocidad: ' . $this->velocidad . '<br>';

            echo $info;
        }

        private function get_color () {
            return $this->color;
        }
    }
?>