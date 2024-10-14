<!DOCTYPE html>
<html>
<head>
    <title>escuela </title>
</head>
<body>
    <h1>escuela </h1>

<?php

    
$aluno = $_GET["alumno"];
$costealumno = 0;
$costetotal =0;

if ($aluno >= 100 ){
    $costealumno=65;
   }elseif ($alumno >=50){
$costealumno=70;
   }elseif ($alumno >=30){
    $costealumno=95;
} else{
    $costealumno = 4000 / $alumno;
}

   
$costetotal = $costealumno * $alumnno;  
echo "el coste por alumno es: $costealumno con un total $alumnos alumnos " <br>;
echo "el coste total es $costetotal";

?>

</body>
</html>