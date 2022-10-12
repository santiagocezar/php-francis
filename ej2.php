<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <p>Resultados:</p>
    <ul>
    <?php
        $a = 6;
        $b = 3;
        $amasb = $a + $b
        $amenb = $a - $b
        $aporb = $a * $b
        $adivb = $a / $b

        echo "<li>", $a, " + ", $b, " = ", $amasb, "</li>";
        echo "<li>", $a, " - ", $b, " = ", $amenb, "</li>";
        echo "<li>", $a, " * ", $b, " = ", $aporb, "</li>";
        echo "<li>", $a, " / ", $b, " = ", $adivb, "</li>";
    ?>
    </ul>
</body>
</html>