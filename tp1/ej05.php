<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        function utf8rev(string $str) {
            // maldito unicode :'(
            preg_match_all('/./us', $str, $res);
            return join('', array_reverse($res[0]));
        }

        $str = "Neuquén";
        echo "<p>\"", $str, "\" al revés es ", utf8rev($str), "</p>";
    ?>
</body>
</html>