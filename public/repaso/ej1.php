<!DOCTYPE html>
<html>
<head>
    <title>pepinillo grasiento    </title>
</head>
<body>
    <h1>pepinillo grasiento   </h1>

<?php
  
$tipo= $_GET["tipo"];
$precio= 0;
$cargo=0.05;
$total=0;
$añadido=0;


if ($tipo =="sencillas"){
    $precio=20;
}elseif ($tipo="doble"){
    $precio=25;
}elseif($tipo="triple"){
    $precio=28;
}

 $añadido= $precio*$cargo;
 $total= $añadido+$precio;


echo "el precio es $total "



?>

</body>
</html>