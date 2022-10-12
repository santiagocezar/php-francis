<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 3.2</h1>
    <p>
        Crear una matriz de 3x3 y cargar en ella números aleatorios entre -100 y 100. 
        Contar y mostrar: cantidad positivos, cantidad negativos y cantidad nulos
    </p>
    <hr>

    <h2>Resolución</h2>

    <?php
        $rows = array();

        for ($i=0; $i < 3; $i++) { 
            $rows[$i] = array();
            for ($j=0; $j < 3; $j++) { 
                $rows[$i][$j] = rand(-100,100);
            }
        }
        
        $nega = 0;
        $posi = 0;
        $nulo = 0;
        
        foreach ($rows as $cols) {
            foreach ($cols as $nums) {
                if ($nums < 0)
                    $nega ++;
                else if ($nums > 0)
                    $posi ++;
                else
                    $nulo ++;
            }
        }

        echo "<p>Números negativos: $nega</p>";
        echo "<p>Números positivos: $posi</p>";
        echo "<p>Números nulos: $nulo</p>";
    ?>
</body>
</html>
