<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
<body>
    <?php
        function de100a100() {
            $n = rand(-100, 100);
            echo "<li>", $n, "</li>";
            return $n;
        }

        function generar10() {
            $total = 0;
            $pos = 0;
            $neg = 0;

            for ($i=0; $i < 10; $i++) { 
                $n = de100a100();
                $total += $n;
                if ($n < 0) $neg ++;
                else $pos ++;
            }
            echo "<p>Total: ".$total."</p>";
            echo "<p>Promedio: ".($total/10)."</p>";
            echo "<p>Positivos: ".$pos."</p>";
            echo "<p>Negativos: ".$neg."</p>";
        }
    
        echo "<ul>";
        generar10();
        echo "</ul>";
    ?>
</body>
</html>