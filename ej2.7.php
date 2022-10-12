<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 2.7</h1>
    <p>Se tiene almacenado en un arreglo de una dimensión las notas de 22 alumnos correspondientes a la evaluación de la asignatura “Base de Datos II”. Obtener y mostrar: </p>
    <ul>
        <li>la cantidad y el porcentaje de alumnos que promocionaron (nota >=8).</li>
        <li>la cantidad y el porcentaje de alumnos que aprobaron el parcial (nota >= a 6) .</li>
        <li>el promedio de todas las notas.</li>
        <li>la menor nota y la posición en la que se encuentra.</li>
        <li>la mayor nota y la posición en la que se encuentra.</li>
    </ul>
    <p>Generar las notas aleatoriamente, colocando el rango adecuado.</p>
    <hr>

    <h2>Resolución</h2>

    <?php


        $vec = array();

        for ($i=0; $i < 22; $i++) { 
            array_push($vec, rand(1, 10));
        }

        $total = 0;
        $notas = count($vec);
        $promocionados = 0;
        $aprobados = 0;
        
        $min = 10;
        $max = 0;
        $imin = 0;
        $imax = 0;

        foreach ($vec as $i => $nota) {
            $total += $nota;
            if ($nota >= 8) $promocionados ++;
            if ($nota >= 6) $aprobados ++;
            
            if ($nota <= $min) {
                $min = $nota;
                $imin = $i;
            }
            if ($nota >= $max) {
                $max = $nota;
                $imax = $i;
            }
        }

        $porcProm = round($promocionados / $notas * 100, 2);
        $porcApro = round($aprobados / $notas * 100, 2);
        $promedio = round($total / $notas, 2);

        echo "Promocionados: $promocionados ($porcProm%)<br>";
        echo "Aprobados: $aprobados ($porcApro%)<br>";
        echo "Promedio: $promedio<br>";
        echo "Mayor: $max (nota N°$imax)<br>";
        echo "Menor: $min (nota N°$imin)<br>";
    ?>
</body>
</html>
