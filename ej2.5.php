<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 5</title>
</head>
<body>
    <?php
        $vec = array();

        for ($i=0; $i < 50; $i++) { 
            array_push($vec, rand(-100, 100));
        }

        $total = 0;
        foreach ($vec as $num) {
            $total += $num;
        }
        $prom = $total / count($vec);

        echo "<p>Total: $total</p>";
        echo "<p>Promedio: $prom</p>";
    ?>
</body>
</html>
