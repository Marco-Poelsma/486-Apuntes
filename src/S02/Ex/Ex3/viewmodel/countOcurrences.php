<?php

function countOcurrences(string $query, int $column): int
{
    require_once "../viewmodel/convertIntoDifferentArrays.php";
    $count = 0;
    $array = array();

    switch ($column) {
        case 0:
            global $cityNames;
            $array = array($cityNames);
            break;
        case 1:
            global $countryNames;
            $array = array($countryNames);
            break;
        case 2:
            global $continentNames;
            $array = array($continentNames);
            break;
    }

    foreach ($array as $value) {
        if ($value == $query) {
            $count++;
        }
    }

    return $count;
}
