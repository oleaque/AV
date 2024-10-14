<!DOCTYPE html>
<html>
<head>
    <title>curstaceo </title>
</head>
<body>
    <h1>crustaceo </h1>

<?php

    
$personas = 500;
$costeplato = 95;
if ( $personas > 300)
 {
    $costeplato =75;
} 
else{
        if ($personas > 200) {
        $costeplato = 85;
    }   else 
    
    {
        $costeplato = 95;
    }
}

echo "el presupuesto es: " . $costeplato;

?>

</body>
</html>