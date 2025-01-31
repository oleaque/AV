<?php
class Productos{
    protected $fechacaducidad;
    protected $numerolote;

    function __construct($caducidad, $lote){
        $this->fechacaducidad = $caducidad;
        $this->numerolote = $lote;
    }
}


