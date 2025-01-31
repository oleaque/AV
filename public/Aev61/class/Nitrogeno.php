<?php
require_once("Congelados.php");

class Nitrogeno extends Congelados{
    private $infcongelacion;
    private $tiempoexposicion;

    function __construct($caducidad, $lote,$fenv,$porg,$temp,$infcon,$tiempexp){
        parent::__construct($caducidad, $lote,$fenv,$porg,$temp);
        $this->infcongelacion= $infcon;
        $this ->tiempoexposicion=$tiempexp;
    }
}

