<?php
class fecha
{
    public static function getfecha()
    {
        $anio = date('Y');
        $mes = date('m');
        $dia = date('d');

        $fecha = $dia . '/' . $mes . '/' . $anio;
        return $fecha;
    }
    
    public static function gethora()
    {
        $hora = date('H');
        $minutos = date('m');
        $segundos = date('s');

        $hora = $hora . ':' . $minutos . ':' . $segundos;
        return $hora;
    }
}
