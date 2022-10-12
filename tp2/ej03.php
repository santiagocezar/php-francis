<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 3</title>
</head>
<body>
    <?php
        $vec = array();

        for ($i=1; $i <= 50; $i++) { 
            array_push($vec, $i*2);
        }

        echo "<ul>";
        for ($i=0; $i < count($vec); $i++) { 
            echo "<li>$vec[$i]</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>