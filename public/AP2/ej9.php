<!DOCTYPE html>
<html>
<head>
    <title>fibonacci   </title>
</head>
<body>
    <h1>fibonacci  </h1>

<?php
  
$cantidades = $_GET["cant"];

$actual = 0;
$sig = 1;
$suma = 0;

for ($i=1;$i<=$cantidades;$i++){
    echo $actual . " ";
    $suma = $actual + $sig;
    $actual = $sig;
    $sig = $suma;
}


?>

</body>
</html>