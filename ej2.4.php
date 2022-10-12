<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 4</title>
</head>
<body>
    <?php
        $vec = array();

        for ($i=0; $i < 50; $i++) { 
            array_push($vec, rand(-100, 100));
        }

        $posi = 0;
        $nega = 0;
        $nulo = 0;

        echo "<ul>";
        for ($i=0; $i < count($vec); $i++) { 
            $n = $vec[$i];
            if ($n > 0) $posi ++;
            elseif ($n < 0) $nega ++;
            else $nulo ++;
        }
        echo "</ul>";

        echo "<p>Cantidad: ".count($vec)."</p>";
        echo "<p>Positivos: $posi</p>";
        echo "<p>Negativos: $nega</p>";
        echo "<p>Nulos: $nulo</p>";
    ?>
</body>
</html>