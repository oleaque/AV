<?php
require_once("Deporte.php");

class Futbol extends Deporte{

   private $porteros;
   private $tarjetas;
   private $puntos;


   function __construct($jugadores, $balon,$protecciones,$portero,$rojas,$goles){
   parent::__construct($jugadores, $balon,$protecciones);

   $this -> porteros = $portero;
   $this -> tarjetas = $rojas;
   $this -> puntos = $goles;
    }
}










    