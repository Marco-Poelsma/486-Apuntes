<?php

require_once("../model/cities.php");
global $cities;

$cityNames = array();
$countryNames = array();
$continentNames = array();

foreach ($cities as $item) {
    for ($i = 0; $i < 3; $i++) {
        if ($i == 0) {
            $cityNames[] = $item[$i];
        } elseif ($i == 1) {
            $countryNames[] = $item[$i];
        } else {
            $continentNames[] = $item[$i];
        }
    }
}
