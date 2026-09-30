<?php

$values = array(1, 2, 3, 4, 5);

$remove = 3;

function findAndRemoveValue(array $input, mixed $value): array
{
    $index = array_search($value, $input, true);

    $arrayObject = new ArrayObject($input);
    $rArray = $arrayObject->getArrayCopy();
    if ($index !== false) {
        array_splice($rArray, $index, 1);
    }

    return $rArray;
}
