<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 9</title>
</head>
<body>
    <h1>Ejercicio 2.9</h1>
    <p>
        Cargar en un arreglo  20 elementos números aleatorios ubicados entre -100 y 100,
        atendiendo a la siguiente condición: en las posiciones pares del vector se deben
        cargar números positivos y en las impares números negativos. Luego mostrar el
        vector cargado.
    </p>
    <hr>

    <h2>Resolución</h2>

    <?php
        $vec = array();

        for ($i=0; $i < 20; $i++) { 
            $n = rand(0, 100);
            $signo = $i % 2 == 0 ? -1 : 1;
            array_push($vec, $n * $signo);
        }
    
        echo "<ol>";
        foreach ($vec as $num) {
            echo "<li>$num</li>";
        }
        echo "</ol>";
    ?>
</body>
</html>
