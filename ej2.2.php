<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 2</title>
</head>
<body>
    <?php
        $vec = array(1, 4, 6, 4, 99);

        echo "<p>El vector tiene ".count($vec)."</p>";
        echo "<ul>";
        for ($i=0; $i < count($vec); $i++) { 
            echo "<li>$vec[$i]</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>