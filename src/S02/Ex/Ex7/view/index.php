<?php

namespace Ex7;

require_once "../model/Vehiculo.php";
require_once "../model/Maritimo.php";
require_once "../model/Terrestre.php";
require_once "../viewmodel/viewmodel.php";

global $avion;
global $coche;
global $tren;
global $barco;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>

    <h2>Instancio objetos</h2>
    <p>
        <?php var_dump($avion); ?>
    </p>
    <p>
        <?php var_dump($coche); ?>
    </p>
    <p>
        <?php var_dump($tren); ?>
    </p>
    <p>
        <?php var_dump($barco); ?>
    </p>

    <h2>Funciones de las clases</h2>
    <h3>Calcular tiempo (todos los objetos)</h3>
    <p>d = 1200 km</p>
    <p>
        Avión: <?php echo $avion->calcularTiempo(1200); ?>
    </p>
    <p>
        Coche: <?php echo $coche->calcularTiempo(1200); ?>
    </p>
    <p>
        Tren: <?php echo $tren->calcularTiempo(1200); ?>
    </p>
    <p>
        Barco: <?php echo $barco->calcularTiempo(1200); ?>
    </p>

    <h3>Calcular precio (barco)</h3>
    <p>
        <?php echo $barco->calcularPrecio(); ?>
    </p>

    <p><a href="../../../../index.html">Volver a inicio</a></p>
</body>
</html>
