<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
    <?php
        $i = 1;
        $m = (int)date("d");
        while ($i <= $m) {
            echo "<li>", $i++, "</li>";
        }
    ?>
</body>
</html>