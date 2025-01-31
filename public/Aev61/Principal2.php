<?php
require_once("./class2/Deporte.php");
require_once("./class2/Futbol.php");
require_once("./class2/Baloncesto.php");
require_once("./class2/Rugby.php");





 $array = [1, 2, 3, 1, 2];
foreach($array as $array){

    if($array == 1 ){
    $array= new Rugby ("15","ovalado","si","9","12","5");

    }elseif($array == 2){
        $array= new Baloncesto ("5","redondo","no","11","4","20");

    }elseif($array == 3){
            $array= new Futbol ("11","redondo","no", "iker casillas","2","3");

    }
    var_dump($array);
}






