<?php
require_once("Congelados.php");

class Agua extends Congelados{
    private $salinidadagua;

    function __construct($caducidad, $lote,$fenv,$porg,$temp,$salinidad){
        parent::__construct($caducidad, $lote,$fenv,$porg,$temp);
        $this->salinidadagua = $salinidad;
    }
}




