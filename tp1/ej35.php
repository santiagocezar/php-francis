<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 33</title>
</head>
<body>
    <?php
        function cuadrado(int $lado) {
            return $lado * $lado;
        }
        function cubo(int $arista) {
            return $arista * $arista * $arista;
        }

        $largo = rand(0, 100);

        echo "<p>Cuadrado = ", cuadrado($largo), "</p>";
        echo "<p>Cubo = ", cubo($largo), "</p>";
    ?>
</body>
</html>