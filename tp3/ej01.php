<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 3.1</h1>
    <p>
        Crear una matriz de 3x3 y cargar en ella números aleatorios. Luego 
        mostrar dicha matriz cargada.
    </p>
    <hr>

    <h2>Resolución</h2>

    <?php
        $rows = array();

        for ($i=0; $i < 3; $i++) { 
            $rows[$i] = array();
            for ($j=0; $j < 3; $j++) { 
                $rows[$i][$j] = rand(-100,100);
            }
        }
        
        echo "<table>";
        foreach ($rows as $cols) {
            echo "<tr>";
            foreach ($cols as $nums) {
                echo "<td>$nums</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
