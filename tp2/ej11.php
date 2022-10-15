<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 11</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Ejercicio 2.11</h1>
    <p>
        Cargar en un arreglo 50 elementos que sean números aleatorios con
        rango -100;100. Obtener y mostrar:
    </p>
    <ul>
        <li>El mayor elemento y su posición</li>
        <li>El menor elemento y su posición</li>
        <li>Guardar en un nuevo vector todos los elementos &lt; 0. Mostrar dicho vector.</li>
    </ul>

    <hr>

    <h2>Resolución</h2>

    <?php
        $vec = array();

        for ($i=0; $i < 50; $i++) { 
            $n = rand(-100, 100);
            array_push($vec, $n);
        }
        
        $max = -100; $imax = 0;
        $min = 100; $imin = 0;
        $bajo0 = array();
    
        foreach ($vec as $i => $num) {
            if ($num <= $min) {
                $min = $num;
                $imin = $i;
            }
            if ($num >= $max) {
                $max = $num;
                $imax = $i;
            }
            if ($num < 0) array_push($bajo0, $num);
        }

        echo "Mayor: $max (posición $imax)<br>";
        echo "Menor: $min (posición $imin)<br>";
        echo "<h3>Menores a 0</h3>";
        echo "<ul>";
        foreach ($bajo0 as $num) {
            echo "<li>$num</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>
