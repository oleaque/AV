<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
        //INTRODUCE AQUÍ TU CÓDIGO
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num=$_POST["num"] 
            if($num/2==0){
               $num/2 
            }else{
               $num*+1 
            }

            
        }
        
    ?>
    
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>