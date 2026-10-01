<?php

$values = array(1, 2, 3, 3, 5, 5, 7);

function removeDuplicates(array $input): array
{
    $arrayObject = new ArrayObject($input);
    $rArray = $arrayObject->getArrayCopy();

    $rArray = array_unique($rArray);

    return $rArray;
}
