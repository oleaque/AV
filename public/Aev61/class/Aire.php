<?php
require_once("Congelados.php");

class Aire extends Congelados{
    private $composicionaire;

    function __construct($caducidad, $lote,$fenv,$porg,$temp,$compair){
        parent::__construct($caducidad, $lote,$fenv,$porg,$temp);
        $this->composicionaire = $compair;
    }
}