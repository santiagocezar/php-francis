<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 31</title>
</head>
<body>
    <?php
        function sumaProducto(int $a, int $b) {
            echo "<p>A = ", $a, " — B = ", $b, "</p>";
            echo "<p>Suma: ", $a + $b, "</p>";
            echo "<p>Producto: ", $a * $b, "</p>";
        }
    
        sumaProducto(2, 4);
    ?>
</body>
</html>