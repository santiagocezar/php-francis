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
        function relacion(int $a, int $b) {
            echo "<p>";
            echo $a;
            if ($a > $b)
                echo " &gt; ";
            elseif($a < $b)
               echo " &lt; ";
            else
               echo " == ";
            echo $b;
            echo "</p>";
        }

        $a = rand(0, 100);
        $b = rand(0, 100);

        echo "<p>A = ", $a, "</p>";
        echo "<p>B = ", $b, "</p>";


        function test(int &$varASumar) {
            $varASumar ++;
        }
        $a = 2;
        $b = 3;
        $c = 5;

        test($a);
        test($b);
        test($c);

        echo "<p>", $a, "</p>";
        echo "<p>", $b, "</p>";
        echo "<p>", $c, "</p>";
        
        relacion($a, $b)
    ?>
</body>
</html>