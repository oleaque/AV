<!DOCTYPE html>
<html>
<head>
    <title>escuela    </title>
</head>
<body>
    <h1>escuela</h1>

<?php
  
$alumnos= $_GET["alumnos"];
$precio=0;
$total=0;

if ($alumnos>=100){
    $precio=65;
}elseif ($alumnos>=50){
    $precio=70;
} elseif ($alumnos>=30){
    $precio=95;
}else{
    $precio=4000;
}
    
$total= $alumnos*$precio;
echo "cada alumno pagara $precio € y el coste total es $total €" 

?>

</body>
</html>