<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<body>
    <?php
    echo '<ul>';
    $total = 0;
    for ($i=0; $i < 25; $i++) { 
        $n = rand(-1000, 1000);
        echo '<li>', $n, '</li>';
        $total += $n;
    }
    echo '</ul>';
    echo '<p>Total: ', $total, '</p>';
    echo '<p>Promedio: ', $total / 25, '</p>';
    ?>
</body>
</html>