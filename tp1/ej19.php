<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <p>
    <?php
        $n = rand(1, 100);
        $dig = 3;
        if ($n < 10) {
            $dig = 1;
        } elseif ($n < 100) {
            $dig = 2;
        }

        echo "Dígitos del número (", $n, "): ", $dig
    ?>
    </p>
</body>
</html>