<?php

function sumDigits(int $value): int
{
    $charArray = str_split((string) $value); //Convertim el nombre en un array de chars

    $intArray = array();

    //Recorrem l'array de chars, convertint cada char en un int i l'emmagatzemem a un array d'ints
    foreach ($charArray as $digit) {
        $intArray[] = (int) $digit;
    }

    //Recorrem l'array d'ints i sumem cada valor
    $result = 0;
    foreach ($intArray as $digit) {
        $result += $digit;
    }

    return $result;
}
