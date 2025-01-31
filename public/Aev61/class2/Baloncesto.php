<?php 

require_once("Deporte.php");

class Baloncesto extends Deporte{

private $tecnica;
private $tiroslibre;
private $canasta;

    function __construct($jugadores, $balon,$protecciones,$tecnicas,$tiroslibres,$canastas){
    parent::__construct($jugadores, $balon,$protecciones);

$this-> tecnica = $tecnicas;
$this-> tiroslibre = $tiroslibres;
$this-> canasta = $canastas;


    }
}






    

  

