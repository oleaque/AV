<?php
require_once("Productos.php");

class Frescos extends Productos{
    private $fechaenvasado;
    private $paisorigen;

    function __construct($caducidad, $lote,$envasado, $origen){
        parent::__construct($caducidad, $lote);
        $this->fechenvasado = $envasado;
        $this->paisdeorigen = $origen;
    }
}



  