<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        //INTRODUCE AQUÍ TU CÓDIGO
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $paquetes=$_POST["paquetes"];
        $ANCHO=$_POST["ANCHO"];
        $LARGO=$_POST["LARGO"];
        $ALTO=$_POST["ALTO"];
        $peso=$_POST["peso"];
        $zona=$_POST["zona"];
$tamano = $LARGO*$ALTO*$ANCHO;
$precio=0;
$total= $precio*$paquetes;

if ( is_numeric ($tamano)){
    if($tamano<=0.5)
    $precio=50;
 }elseif ($tamano<=1){
    $precio=75;
 }else{
    $precio=100;
 }
  echo "el precio es $tamano" ; 
 if(is_numeric($peso)){
    if($peso<5)
    $precio*1;
 }elseif($peso>5){
 $precio*25/100;
 }elseif($peso>10){
 $precio*50/100;
 }elseif($peso>15){
    echo"no envio";
 }if($zona="peninsula"){
    $precio*1;
 }elseif($zona="baleares maritimo"){
    $precio*1;
 }elseif($zona="baleares aereo"){
    $precio*10/100;
 }else{
    $precio*10/100;
 }
 
echo "<br>el precio total del envio es $total ";

}





    ?>
    
    <form method="POST" action="">
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamano">ANCHO:</label>
        <input type="number" id="ANCHO" name="ANCHO" value="">
        <label for="tamano">LARGO:</label>
        <input type="number" id="LARGO" name="LARGO" value="">
        <label for="tamano">ALTO:</label>
        <input type="number" id="ALTO" name="ALTO" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <label for="zona">ZONA</label>
        <input  type="text"id="zona" name="zona" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
