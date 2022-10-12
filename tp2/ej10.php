<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 10</title>
</head>
<body>
    <h1>Ejercicio 2.10</h1>
    <p>
        Cargar en un arreglo 50 elementos que sean números aleatorios con rango
        -100;100. Obtener y mostrar:
    </p>
    <ul>
        <li>El mayor elemento y su posición</li>
        <li>El menor elemento y su posición</li>
        <li>El mensaje “Existe el 0” en caso de encontrar el número 0, caso contrario mostrar “No existe el 0”. Aplicar el uso de “bandera” para éste apartado.</li>
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
        $hay0 = false;
    
        foreach ($vec as $i => $num) {
            if ($num <= $min) {
                $min = $num;
                $imin = $i;
            }
            if ($num >= $max) {
                $max = $num;
                $imax = $i;
            }
            if (!$hay0) $hay0 = $num == 0;
        }

        echo "Mayor: $max (posición $imax)<br>";
        echo "Menor: $min (posición $imin)<br>";
        echo ($hay0 ? "Existe el 0!" : "no existe el 0.")."<br>";
    ?>
</body>
</html>
