<?php
session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
</body>
</html>
    <form action="" method="POST">
        <label for="filainicio">Fila Inicio:</label>
        <input type="number" id="filainicio" name="filainicio" min="1" max="6"><br>
        <label for="columnainicio">Columna Inicio:</label>
        <input type="number" id="columnainicio" name="columnainicio" min="1" max="6"><br>
        <label for="filafin">Fila Fin:</label>
        <input type="number" id="filafin" name="filafin" min="1" max="6"><br>
        <label for="columnafin">Columna Fin:</label>
        <input type="number" id="columnafin" name="columnafin" min="1" max="6"><br>

        <input type="submit" value="Prueba">
    </form>

    <?php 
    $numeros = [1, 2, 3, 4, 5, 6];
    $colores = ['RED', 'YEL', 'GRE', 'BLU', 'BLA', 'WHI'];
    /*usa esto si no los generas tú*/
   // $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
    //$tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];
    
    if (!isset($_SESSION['tablero'])) {
        $_SESSION['tablero'] = generarTablero($numeros, $colores);
    }
    $tablero = $_SESSION['tablero'];
    
    
    echo "<h1>Tablero de Juego:</h1>";
    dibujarTablero( $tablero);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $filainicio = (int)$_POST['filainicio'] - 1; 
        $columnainicio = (int)$_POST['columnainicio'] - 1; 
        $filafin = (int)$_POST['filafin'] - 1; 
        $columnafin = (int)$_POST['columnafin'] - 1; 
        
        if (tiradaPermitida($filainicio, $columnainicio, $filafin, $columnafin)) {
            echo "Tirada permitida. <br>";
            if (tiradaValida($tablero, $filainicio, $columnainicio, $filafin, $columnafin)) {
                echo "Tirada válida.";
            } else {
                echo "Tirada no válida.";
            }
        } else {
            echo "Tirada no permitida.";
        }
    }
    
    // FUNCIONS
    function generarCombinaciones($num, $col) {
        $combinaciones = [];
        foreach ($num as $numero) {
            foreach ($col as $color) {
                $combinaciones[] = [$numero, $color];
            }
        }
        return $combinaciones;
    }
    
    function dibujarTablero( $tablero) {
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 6; $j++) {
                // d'esta manera accedisc al color i número directamente desde el tablero
                $color = $tablero[$i][$j][0]; 
                $numero = $tablero[$i][$j][1]; 
                echo "$numero-$color ";
            }
            echo "<br>";
        }
    }

    function tiradaValida($tablero, $filainicio, $columnainicio, $filafin, $columnafin) {
        $inicio = $tablero[$filainicio][$columnainicio];
        $fin = $tablero[$filafin][$columnafin];

        return ($inicio[0] === $fin[0] || $inicio[1] === $fin[1]);
    }

    function tiradaPermitida($filainicio, $columnainicio, $filafin, $columnafin) {
        return ($filainicio === $filafin || $columnainicio === $columnafin);
    }

    function generarTablero($numeros, $colores) {
        $tablero = [];
        for ($i = 0; $i < 6; $i++) {
            $tablero[$i] = [];
            for ($j = 0; $j < 6; $j++) {
                $numrandom = $numeros[array_rand($numeros)];
                $randomcolor = $colores[array_rand($colores)];
                $tablero[$i][$j] = [$randomcolor, $numrandom];
            }
        }
        return $tablero;
    }
    ?>
