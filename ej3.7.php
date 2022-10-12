<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 Ejercicio 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ejercicio 3.7</h1>
    <p>
    	Escriba un programa que ponga números aleatorios menores a 100 en un
    	array bidimensional de 4 por 4. Realizar y mostrar:
    </p>
    <ul>
        <li>Matriz</li>
        <li>Promedio de todos los números</li>
        <li>Valor máximo y mínimo</li>
        <li>Intercambiar los valores de la diagonal principal por los valores de la última fila.</li>
        <li>Matriz modificada.</li>
    </ul>
    <hr>

    <h2>Resolución</h2>

    <?php
    $matrix = array();
    $w = 4;
    $h = 4;

    for ($i = 0; $i < $h; $i++) {
        for ($j = 0; $j < $w; $j++) {
            $matrix[$i][$j] = rand(0, 100);
        }
    }

    $total = 0;
    $min = 100;
    $max = 0;
    
    echo "<table>";
    foreach ($matrix as $r => $row) {
        echo "<tr>";
        foreach ($row as $c => $col) {
            $total += $col;
            echo "<td>$col</td>";

            if ($col >= $max) $max = $col;
            if ($col <= $min) $min = $col;
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";
    
    echo "<table>";
    foreach ($matrix as $r => $row) {
        echo "<tr>";
        foreach ($row as $c => $col) {
            if ($r == $c) {
                $matrix[$r][$c] = $matrix[$h-1][$c];
                $matrix[$h-1][$c] = $col;
            }
            $col = $matrix[$r][$c];
            echo "<td>$col</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    $promedio = round($total / $w / $h, 2);

    echo "<p><strong>Promedio total:</strong> $promedio</p>";
    echo "<p><strong>Mínimo:</strong> $min</p>";
    echo "<p><strong>Máximo:</strong> $max</p>";
    ?>
</body>

</html>
