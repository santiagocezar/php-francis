<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 Ejercicio 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ejercicio 3.5</h1>
    <p>
        En un arreglo bidimensional que almacena la cantidad de computadoras vendidas
        (generadas aleatoriamente) por tres vendedores en cuatro zonas diferentes.
        Se pide mostrar:
    </p>
    <ul>
        <li>La zona que más computadoras vendió.</li>
        <li>El vendedor que menos computadoras vendió.</li>
        <li>La cantidad de computadoras vendidas por todos los vendedores en todas las zonas.</li>
    </ul>
    <hr>

    <h2>Resolución</h2>

    <?php
    $ventas = array();
    $vendedores = 3;
    $zonas = 4;

    for ($i = 0; $i < $zonas; $i++) {
        $ventas[$i] = array();
        for ($j = 0; $j < $vendedores; $j++) {
            $ventas[$i][$j] = rand(0, 1000);
        }
    }

    $zonaMax = 0;
    $zonaMaxVentas = -1;

    $vendedorMin = 0;
    $vendedorMinVentas = 1001;

    $total = 0;
    $ventasPorVendedor = array_fill(0, $vendedores, 0);    

    echo "<table>";
    foreach ($ventas as $z => $zona) {
        $totalZona = 0;
        echo "<tr>";
        foreach ($zona as $v => $vendedor) {
            $totalZona += $vendedor;
            $ventasPorVendedor[$v] += $vendedor;
            echo "<td>$vendedor</td>";
        }
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
    echo "</table>";

    foreach ($ventasPorVendedor as $v => $venta) {
        if ($venta < $vendedorMinVentas) {
            $vendedorMin = $v;
            $vendedorMinVentas = $venta;
        }
    }


    echo "<p><b>Zona con más ventas:</b> Zona N°".($zonaMax+1)."</p>";
    echo "<p><b>Vendedor con menos ventas:</b> Vendedor N°".($vendedorMin+1)."</p>";
    echo "<p><b>Total vendido por todos:</b> $total</p>";
    ?>
</body>

</html>