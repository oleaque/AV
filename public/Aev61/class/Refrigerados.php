<?php
require_once("Productos.php");

class Refrigerados extends Productos{
    private $codorganismo;
    private $fecahenvasado;
    private $temperatura;
    private $pais;

    function __construct($caducidad, $lote,$corg,$fenv,$temp,$p){
        parent::__construct($caducidad, $lote);
        $this->codorganismo = $corg;
        $this->fecahenvasado = $fenv;
        $this->temperatura = $temp;
        $this->pais = $p;
    }
}





