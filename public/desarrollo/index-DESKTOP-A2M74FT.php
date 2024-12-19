<!DOCTYPE html>
<html>
<head>
    <title>tarjeta    </title>
</head>
<body>
    <h1>tarjeta</h1>

<?php
  
$tipo= $_GET["tipo"];
$credito= $_GET["credito"];
$limite=0;

if($tipo==1){
 $limite=$credito*25/100;
}elseif($tipo==2){
    $limite=$credito*35/100;
}elseif($tipo==3){
    $limite=$credito*40/100;
}else{
   $limite= $credito*50/100;
}


echo "el nuevo limite de la tarjeta es $limite €" 

?>

</body>
</html>