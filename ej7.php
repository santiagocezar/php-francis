<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7e</title>
</head>
<body>
    <?php
        $str = "Que noche mágica ciudad de Buenos Aires";
        $find = "ciudad";
        $pos = strpos($str, $find);
        echo "<p>\"", $find, "\" en \"", $str, "\" está en la posición ", $pos, "</p>";
    ?>
</body>
</html>