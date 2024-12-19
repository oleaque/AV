<!DOCTYPE html>
<html>
<head>
    <title>ahorros en un año  </title>
</head>
<body>
    <h1>ahorros en un año  </h1>

<?php
$total = 0;
    
for ($mes=1;$mes<=12;$mes++){
    $cantidad = rand(0,250);
    $total += $cantidad;
    echo "este mes $mes has ahorrado $cantidad € y llevas $total en total<br>";
}
?>

</body>
</html>