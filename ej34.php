<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 33</title>
</head>
<body>
    <?php
        function promedio(int $a, int $b) {
        	return ($a + $b) / 2;
        }

        $a = rand(0, 100);
        $b = rand(0, 100);

        echo "<p>A = $a</p>";
        echo "<p>B = $b</p>";
        echo "<p>Promedio = ".promedio($a, $b)."</p>";
    ?>
</body>
</html>
