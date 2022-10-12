<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $str = "Vamos a aprender un poco de PHP";
        echo "<p>\"", $str, "\" tiene ", str_word_count($str), " palabras</p>";
    ?>
</body>
</html>