<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32</title>
</head>
<body>
    <?php
        function signo(int $n) {
            if ($n > 0)
                echo "Signo +";
            elseif($n < 0)
               echo "Signo -";
            else
               echo "Signo nulo";
        }

        echo "<ul>";
        for ($i=0; $i < 10; $i++) { 
            echo "<li>";
            $n = rand(-10, 10);
            echo "Num: ", $n, "<br>";
            signo($n);
            echo "</li>";
        }
        echo "</ul>";
    
    ?>
</body>
</html>