<?php

namespace ex3;

function countOcurrences(string $query, int $column): int
{
    require_once "../model/City.php";

    $tokyo = new City("Tokyo", "Japan", "Asia");
    $mexicoCity = new City("Mexico City", "Mexico", "North America");
    $nyc = new City("New York City", "USA", "North America");
    $mumbai = new City("Mumbai", "India", "Asia");
    $seoul = new City("Seoul", "Korea", "Asia");
    $shanghai = new City("Shanghai", "China", "Asia");
    $chicago = new City("Chicago", "USA", "North America");
    $buenosAires = new City("Buenos Aires", "Argentina", "South America");
    $cairo = new City("Cairo", "Egypt", "Africa");
    $london = new City("London", "UK", "Europe");

    $cities = array($tokyo, $mexicoCity, $nyc, $mumbai, $seoul, $shanghai, $chicago, $buenosAires, $cairo, $london);

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
