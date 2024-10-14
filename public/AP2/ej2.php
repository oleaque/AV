<!DOCTYPE html>
<html>
<head>
    <title>curstaceo </title>
</head>
<body>
    <h1>uva </h1>

<?php

    
$tipo = $_GET["type"];
$tam = $_GET["size"];
$precioKilo = $_GET["price"];
$kilo = $_GET["kg"]
$preciofinal = $kilos*$precioKilo;

if ( $tipo == "A" ){
   if ($tam == 1){
    $preciofinal +=0.20;
   } else {
    $preciofinal +=0.30;
     }

    
} 


echo "el presupuesto es: " . $costeplato;

?>

</body>
</html>