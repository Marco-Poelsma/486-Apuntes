<?php

namespace ex3;

function countOcurrences(string $query, int $column): int
{
    require_once "../model/City.php";
    require_once "../model/cities.php";
    global $tokyo;
    global $mexicoCity;
    global $nyc;
    global $mumbai;
    global $seoul;
    global $shanghai;
    global $chicago;
    global $buenosAires;
    global $cairo;
    global $london;

    $cities = array($tokyo, $mexicoCity, $nyc, $mumbai, $seoul, $shanghai, $chicago, $buenosAires, $cairo, $london);

    var_dump($tokyo);
    var_dump($cities);

    $count = 0;

    switch ($column) {
        case 0:
            foreach ($cities as $city) {
                if ($city->name == $query) {
                    $count++;
                }
            }
            break;
        case 1:
            foreach ($cities as $city) {
                if ($city->country == $query) {
                    $count++;
                }
            }
            break;
        case 2:
            foreach ($cities as $city) {
                if ($city->continent == $query) {
                    $count++;
                }
            }
            break;
    }

    return $count;
}
