<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 8</title>
</head>
<body>
    <h1>Ejercicio 2.8</h1>
    <p>Cargar en un arreglo N (núm aleatorio antre 1 y 50) elementos que sean números aleatorios enteros positivos (rango: 0;1000). Obtener y mostrar:</p>
    <ul>
    <li>La suma de los números pares.</li>
    <li>El mayor número ingresado y su posición.</li>
    <li>El porcentaje de números impares.</li>
    <li>Cantidad de números nulos.</li>
    <li>Promedio total</li>
    </ul>
    <hr>

    <h2>Resolución</h2>

    <?php
        $n = rand(1, 50);
        $vec = array();

        for ($i=0; $i < $n; $i++) { 
            array_push($vec, rand(0, 1000));
        }
        
        $totalPares = 0;
        $max = 0;
        $imax = 0;
        $impares = 0;
        $nulos = 0;        
        $total = 0;


        foreach ($vec as $i => $num) {
            $total += $num;
        
            if ($num % 2 == 0) $totalPares += $num;
            else $impares ++;
            
            if ($num == 0) $nulos ++;
            
            if ($num >= $max) {
                $max = $num;
                $imax = $i;
            }
        }

        $promedio = round($total / $n, 2);
        $imparesPorc = $impares / $n * 100;

        echo "Suma de pares: $totalPares<br>";
        echo "Mayor: $max (posición $imax)<br>";
        echo "Impares: $impares ($imparesPorc%)<br>";
        echo "Nulos: $nulos<br>";
        echo "Promedio: $promedio<br>";
    ?>
</body>
</html>
