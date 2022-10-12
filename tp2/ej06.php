<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 6</title>
</head>
<body>
    <?php
        $vec = array();

        for ($i=0; $i < 50; $i++) { 
            array_push($vec, rand(-100, 100));
        }

        $min = 100;
        $max = -100;

        foreach ($vec as $num) {
            if ($num < $min) $min = $num;
            if ($num > $max) $max = $num;
        }

        echo "<p>Mayor: $max</p>";
        echo "<p>Menor: $min</p>";
    ?>
</body>
</html>