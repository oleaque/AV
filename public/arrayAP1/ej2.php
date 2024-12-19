<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
       
       $num= rand(0,15);
       $numero=rand(0,15);
        
       var_dump ($num);
       var_dump($numero);
    
        if($num==$numero){
            echo "mismo numero";
        }else{
            echo"no tienen el mismo numero";
        }


    ?>
    
   
</body>
</html>