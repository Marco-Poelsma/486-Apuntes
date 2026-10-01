<?php

namespace Ex7;

require_once "../model/Maritimo.php";
require_once "../model/Terrestre.php";
require_once "../model/Vehiculo.php";

$avion = new Vehiculo("1234Avion", 30000, 800);
$coche = new Terrestre("1234Coche", 150, 120, 4, 300, true);
$tren = new Terrestre("1234Tren", 3000, 300, 40, 5000, false);
$barco = new Maritimo("1234Barco", 1000, 40, 50, 40, 3);
