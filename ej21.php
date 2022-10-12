<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
<body>
    <?php
        $h = date("H");
        echo "<p>";
        if ($h < "6") {
            echo "¡Buenas noches!";
        } elseif ($h < "12") {
            echo "¡Buen día!";
        } elseif ($h < "21"){
            echo "¡Buenas tardes!";
        } else {
            echo "¡Buenas noches!";
        }
        echo "</p>";
        echo "<p><small>", date("H:i"), " en el huso horario PHP (Partición Horaria Particular)</small></p>";

    ?>
</body>
</html>