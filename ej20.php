<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
<body>
    <?php
        $total = 0;
        for ($i=1; $i <= 3; $i++) { 
            $n = rand(-100, 100);
            echo "<p>El número ", $i, " es ";
            if ($n % 2 == 0) {
                echo "par</p>";
            } else {
                echo "impar</p>";
            }
            $total += $n;
        }
        echo "<p><strong>Total:</strong> ", $total, "</p>";
        echo "<p><strong>Promedio:</strong> ", $total / 3, "</p>";
    ?>
</body>
</html>