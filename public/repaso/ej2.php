<!DOCTYPE html>
<html>
<head>
    <title>pepinillo grasiento    </title>
</head>
<body>
    <h1>pepinillo grasiento   </h1>

<?php
  
$preciokg= $_GET["precio"];
$tipo= $_GET["tipo"];
$tamaño=$_GET["tam"];
$kilos=$_GET["kg"];

if($tipo=="A"){
    if ($tamaño=1){
    $preciokg+=0.20;
    }else{
        $preciokg+= 0.30;
    }
}else{
    if ($tam=1){
        $preciokg-=0.30;
    }else{
        $preciokg-=0.50;
    }  
}


$total=$kilos*$preciokg;
echo "el coste total es $total" 

?>

</body>
</html>