<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
<body>
    <ul>
    <?php
        $i = 0;
        while ($i <= 10) {
            echo "<li>", $i, "</li>";
            $i+=2;
        }
    ?>
    </ul>
</body>
</html>