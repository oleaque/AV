<?php 

require_once("Deporte.php");

class Rugby extends Deporte{

private $meles;
private $golpescastigo;
private $ensayo;

    function __construct($jugadores,$balon,$protecciones,$mele,$golpesdecastigo,$ensayos){
        parent::__construct($jugadores,$balon,$protecciones);

$this -> meles = $mele;
$this -> golpescastigo = $golpesdecastigo;
$this -> ensayo = $ensayos;

    }
}