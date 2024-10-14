<!DOCTYPE html>
<html>
<head>
    <title>Area </title>
</head>
<body>
    <h1>Area </h1>

<?php

    
$R = 7;
$H = 7;
define("PI" , 3.14);

$baseT = $R + $R;
$areaC = PI * $R +$R ;
$areaT = $baseT * $H/2;

$area = $areaC + $areaT;

 
echo "la area es ", $area ;

?>

</body>
</html>