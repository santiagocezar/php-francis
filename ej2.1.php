<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 1</title>
</head>
<body>
    <?php
        $vec = array(1, 4, 6, 4, 99);

        echo "<p>El primer número ", $vec[0], 
            " y el último es ", $vec[count($vec)-1], "</p>";
    ?>
</body>
</html>