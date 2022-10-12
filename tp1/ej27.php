<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27</title>
</head>
<body>
    <?php
    echo '<ul>';
    $i = 0;
    do {
        echo '<li>', $i, '</li>';
        $i += 2;
    } while($i <= 10);
    echo '</ul>';
    ?>
</body>
</html>