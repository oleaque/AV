<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <!--formulario para recoger las filas y columnas de inicio y fin-->

    <form action="" method="POST">
<label for="filainicio">fila inicio</label>
<input type="number" id="filainicio" name=filainicio min="0" max="6"><br>
<label for="columnainicio">columna inicio</label>
<input type="number" id="columnainicio" name=columnainicio min="0" max="6"><br>
<label for="filafin">fila fin</label>
<input type="number" id="filafin" name=filafin min="0" max="6"><br>
<label for="columnafin">columna fin</label>
<input type="number" id="columnafin" name=columnafin min="0" max="6"><br>

<input type="submit" value="Prueba">

    </form>
    




</body>
</html>
    
<?php 
    $numeros = [1,2,3,4,5,6];
    $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
    /*usa esto si no los generas tú*/
   // $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
    //$tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];
    
    $combinaciones=array();
    $_SESSION['tablero'] = $tablero;
   
   generarCombinaciones($numeros, $colores);
   generarTablero($numeros, $colores);
   
    
    //FUNCIONES

    $combinaciones=[];
    function generarCombinaciones($num, $col){
        foreach($num as $numero){
            foreach($col as $color){
                $combinaciones[]=[$numero,$color];
            }
        }
        return $combinaciones;
    }
    
    function dibujarTablero(){
        
    }
   
    function tiradaValida($combinaciones){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $filainicio=($_POST['filainicio'])($_POST['filainicio'])=0;
            $columnainicio=($_POST['columnainicio'])($_POST['columnainicio'])=0;
            $filafin=($_POST['filafin'])($_POST['filafin'])=0;
            $columnafin=($_POST['columnafin'])($_POST['columnafin'])=0;
        }
            $tirada= [$filafin, $filainicio, $columnafin,$columnainicio];
            
    }

    function tiradaPermitida(){

    }
        

    function generarTablero($numeros, $colores){
$tablero=[];
for ($i=0;$i<6;+$i++){
    $tablero[$i]=[];
    for($j=0;$j<6;$j++) {

$numrandom=$numeros[array_rand($numeros)];
$randomcolor=$colores[array_rand($colores)];
$tablero[$i][$j]=[$randomcolor, $numrandom];
 }
    } 
    $_SESSION['tablero']=$tablero;
 }
?>