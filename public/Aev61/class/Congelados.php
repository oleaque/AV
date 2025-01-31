<?php
require_once("Productos.php");

class Congelados extends Productos{
    private $fechaenvasado;
    private $paisorigen;
    private $temperatura;

    public function __construct($caducidad, $lote,$fenv,$porg,$temp){
        parent::__construct($caducidad, $lote);
        $this->fechaenvasado = $fenv;
        $this->paisorigen = $porg;
        $this->temperatura = $temp;
    }
}



