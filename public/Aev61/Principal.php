<?php
require_once("./class/Agua.php");
require_once("./class/Aire.php");
require_once("./class/Congelados.php");
require_once("./class/Frescos.php");
require_once("./class/Nitrogeno.php");
require_once("./class/Productos.php");
require_once("./class/Refrigerados.php");




$hamburguesa= new Frescos ("2026", "3", "1/1/2025","españa");
  var_dump($hamburguesa);

  $zumo= new Refrigerados ("2026","2", "543376","2/1/2025","-5ºc","españa");
  var_dump($zumo);

  $helado= new Aire ("2026","5","20/1/2025","francia","-20ºc","20%nit,40%oxigeno,20diox,20%vapor");

  var_dump($helado);

  $hielo= new agua ("2026","9","10/1/2025","italia","-20ºc","50g");
  var_dump($hielo);

  $gambas= new Nitrogeno ("2026","11","22/1/2025","españa","-25ºc","nitro","2054s");
  var_dump($gambas);