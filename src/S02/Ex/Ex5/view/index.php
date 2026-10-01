<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php

    require_once "../viewmodel/removeDuplicates.php";
    global $values;
    $result = removeDuplicates($values);

    ?>
    <h1>Ejercicio 5</h1>
    <h2>Array Inicial</h2>
    <?php var_dump($values); ?>

    <h2>Array Final</h2>
    <?php var_dump($result); ?>
    <p><a href="../../../../index.php">Volver a inicio</a></p>
</body>
</html>
