<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 3.4</h1>
    <p>
        Crear una matriz de 4x5 y cargar en ella números aleatorios
        ubicados entre 0 y 1000. Recorrer la matriz y contar los elementos
        pares que hay en ella, almacenar los mismos en un vector y además
        cambiarlos por (-1). Mostrar la matriz con los cambios hechos y 
        también el vector con los valores pares.
    </p>
    <hr>

    <h2>Resolución</h2>

    <?php
        $matrix = array();
        $rows = 4;
        $cols = 5;

        for ($i=0; $i < $rows; $i++) { 
            $matrix[$i] = array();
            for ($j=0; $j < $cols; $j++) { 
                $matrix[$i][$j] = rand(0, 1000);
            }
        }
        
        $pares = array();
        
        echo "<table>";
        foreach ($matrix as $row) {
            echo "<tr>";
            foreach ($row as $i => $col) {
                if ($col % 2 == 0) {
                    array_push($pares, $col);
                    $row[$i] = -1;
                }
                echo "<td>$row[$i]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<p>Números pares: ".count($pares)."</p>";

        echo "<ul>";
        foreach ($pares as $par){ 
            echo "<li>$par</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>
