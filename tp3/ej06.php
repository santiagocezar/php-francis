<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 Ejercicio 6</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Ejercicio 3.6</h1>
    <p>
        Crear una matriz que permita almacenar las lluvias promedio en un mes de 4 zonas
        por cada uno de los 3 campos pertenecientes a un terrateniente. (Cargar los mm de
        forma aleatoria entre 0 y 300). Se debe calcular y mostrar:
    </p>
    <ul>
        <li>El promedio de lluvias por zonas</li>
        <li>El promedio de lluvias en cada campo, en todas las zonas del mismo.</li>
        <li>Campo y zona en que se contabilizó la mayor cantidad de lluvia.</li>
        <li>El promedio de todas las mediciones que están almacenadas en el arreglo.</li>
        <li>Mostrar todas las componentes del arreglo.</li>
    </ul>
    <hr>

    <h2>Resolución</h2>

    <?php
    $lluviaArray = array();
    $campos = 3;
    $zonas = 4;

    for ($i = 0; $i < $campos; $i++) {
        for ($j = 0; $j < $zonas; $j++) {
            $lluviaArray[$i][$j] = rand(0, 300);
        }
    }

    $totalPorZona = array_fill(0, $zonas, 0);
    $lluviaMax = 0;
    $lluviaMaxZona = 0;
    $lluviaMaxCampo = 0;
    $totalTotal = 0;

    echo "<table>";
    echo "<tr>";
    echo "<th></th>";
    for ($i = 1; $i <= $zonas; $i++) {
        echo "<th>Zona $i</th>";
    }
    echo "<th>Promedio</th>";
    echo "</tr>";
    foreach ($lluviaArray as $campo => $zonaArray) {
        echo "<tr>";
        echo "<td>Campo " . ($campo + 1) . "</td>";
        $totalCampo = 0;
        foreach ($zonaArray as $zona => $mm) {
            $totalPorZona[$zona] += $mm;
            $totalCampo += $mm;
            $total += $mm;
            echo "<td>$mm</td>";

            if ($mm > $lluviaMax) {
                $lluviaMax = $mm;
                $lluviaMaxCampo = $campo;
                $lluviaMaxZona = $zona;
            }
        }
        $promedioCampo = round($totalCampo / $zonas, 2);
        echo "<td>$promedioCampo</td>";
        echo "</tr>";
        if ($totalZona > $zonaMaxVentas) {
            $zonaMax = $z;
            $zonaMaxVentas = $totalZona;
        }
        $total += $totalZona;
        // if ($sum < $minCompus) {
        //     $minZona = $z;
        //     $minCompus = $sum;
        // }
    }
    $promedio = round($total / ($campos * $zonas), 2);
    echo "<tr>";
    echo "<td><strong>Promedio</strong></td>";
    foreach ($totalPorZona as $total) {
        $promedioZona = round($total / $campos, 2);
        echo "<td>$promedioZona</td>";
    }
    echo "<td><strong>$promedio</strong></td>";
    echo "</tr>";
    echo "</table>";

    foreach ($ventasPorVendedor as $v => $venta) {
        if ($venta < $vendedorMinVentas) {
            $vendedorMin = $v;
            $vendedorMinVentas = $v;
        }
    }

    echo "<p>Llovió más en el campo N°".($lluviaMaxCampo+1).", Zona N°".($lluviaMaxZona + 1) . ".</p>";
    ?>
</body>

</html>