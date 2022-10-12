<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>
<body>
    <?php
        echo "<ul>";
        $m = (int)date("d");
        for ($i = 1; $i <= $m; $i++) {
            echo "<li>", $i, "</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>