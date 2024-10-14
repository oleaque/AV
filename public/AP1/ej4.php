<!DOCTYPE html>
<html>
<head>
    <title>Area </title>
</head>
<body>
    <h1>Area </h1>

<?php

    
$B = 7;
$C = 7;
$A =5;

$areaC = $B * $C;
$ladoT = $A - $C;
$areaT = $ladoT * $B/2;

$area = $areaC + $areaT;

 
echo "la area es ", $area ;

?>

</body>
</html>