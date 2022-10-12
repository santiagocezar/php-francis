<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        $str = "Se escribir muy bien";
        $mejor = str_replace("b", "v", $str);
        $mejor = str_replace("y", "i", $mejor);
        $mejor = str_replace("s", "z", $mejor);
        $mejor = str_replace("S", "C", $mejor);
        echo "<p>\"", $str, "\" => \"", $mejor, "\"</p>";
    ?>
</body>
</html>