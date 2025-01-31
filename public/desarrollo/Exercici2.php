<?php
/* SUMA DELS VALORS D'UN ARRAY */ 
//El resultat hauria de ser: 10. Per què no funiona?


echo "<br/><b>Exercici 1</b> SUMA DELS VALORS D'UN ARRAY";

$numeros=[1,2,3,4];
$suma=0;
$tamany = count($numeros);
for ($i=0;$i<$tamany;$i++){
    $suma+=$numeros[$i];
}
var_dump($suma , $numeros);


//--------------------------------------------
/*
FACTORIAL de n:  n! = n x (n-1) x (n-2) x ..... x 3 x 2 x 1
    exemple:  5! = 5 x 4 x 3 x 2 x 1 = 120
    Per que no funciona com cal?
*/


echo "<br/><b>Exercici 2</b> FACTORIAL de n</br />";
$limit=5;
$factorial=1;

for ($i=$limit;$i>=1;$i--){
    $factorial*=$i;
}
echo 'Resultat: '.$factorial;

//--------------------------------------------

/*
FACTORIAL de n:  n! = n x (n-1) x (n-2) x ..... x 3 x 2 x 1
Volem que mostre un literal com el següent 5! = 5 x 4 x 3 x 2 x 1 = 120
*/


echo "<br/><b>Exercici 2.1 Modificació per a que mostre el literal</b></br/>";
$limit=5;
$factorial=1;
$literal=$limit."! = ";

for ($i=$limit;$i>=1;$i--){
    $literal .= $i."x";
    $factorial*=$i;
}

echo 'El resultat de '.$literal." és ".$factorial."<br/>";
//Este echo hauria de mostrar alguna cosa com "El resultat de 5! = 5x4x3x2x1 és 120"


//echo "<br/><b>Exercici 3</b></br />";
//--------------------------------------------

// QUADRAT DE NOMBRES ALEATÒRIS
// 1r.- Construir un array de 10 elements anomenat $nombres, que tinga valors aleatòris 
// entre 1 i 15. Utilitzeu el bucle for
$elements=[];
$numeros=10;
for($i=0;$i<$numeros;$i++){
  $elements[$i]=rand(1,15);
}
//Creem un array anomenat $quadrat que calcularà el quadrat dels nombres anteriors i el mostrem. És a dir nombre * nombre

$quadrat=[]; 
for ($i = 0; $i < $numeros; $i++) {
  $quadrat[$i] = $elements[$i] * $elements[$i];
}
var_dump($elements);
var_dump($quadrat);

//Creem un array anomenat $cub que calcularà el cub dels nombres anteriors i el mostrem. És a dir nombre * nombre * nombre
$cub = [];
for ($i = 0; $i < $numeros; $i++) {
  $cub[$i] = $elements[$i] * $elements[$i] * $elements[$i]; 
}

var_dump($cub);
//var_dump($nombre,"<br/>",$quadrat,"<br/>",$cub,"<br/>");



// Modifiqueu el codi per a utilitzar el foreach i emplenar els arrays $quadrat i $cub
echo "<br/><b>Exercici 4</b></br />";
$mesos = ['Gener','Febrer','Març','Abril','Maig','Juny','Juliol','Agost','Setembre','Octubre','Novembre','Desembre'];
$dies_mesos = [31,28,31,30,31,30,31,31,30,31,30,31];

// Funció per retornar els mesos amb 31 dies
function llistatMesos31(array $mesos, array $dies_mesos) {
    $mesos_31 = [];

    for ($i = 0; $i < count($dies_mesos); $i++) {
        if ($dies_mesos[$i] == 31) {
            $mesos_31[] = $mesos[$i];
        }
    }

    // Retornar els mesos separats per comes
    return implode(",", $mesos_31) . ",";
}

echo llistatMesos31($mesos, $dies_mesos); // Mostra: "Gener,Març,Maig,Juliol,Agost,Octubre,Desembre,"

// Funció per retornar els mesos amb 30 dies
function llistatMesos30(array $mesos, array $dies_mesos) {
    $mesos_30 = [];

    for ($i = 0; $i < count($dies_mesos); $i++) {
        if ($dies_mesos[$i] == 30) {
            $mesos_30[] = $mesos[$i];
        }
    }

    // Retornar els mesos separats per comes
    return implode(",", $mesos_30) . ",";
}

echo "<br/>" . llistatMesos30($mesos, $dies_mesos);// Mostra: "Abril,Juny,Setembre,Novembre,"

//Funció per obtenir els dies d'un mes concret
function diesMes($mes, array $mesos, array $dies_mesos) {
    // Trobar la posició del mes
    $index = array_search($mes, $mesos);

    //Retornar els dies del mes
    return $dies_mesos[$index];
}

echo "<br/>Els dies de Juny són: " . diesMes("Juny", $mesos, $dies_mesos);//Mostra 30



?>   
