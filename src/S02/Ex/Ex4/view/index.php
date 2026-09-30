<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <?php
    require_once "../viewmodel/findAndRemoveValue.php";
    global $values;
    global $remove;

    var_dump($values);
    echo "<p></p>";

    var_dump($remove);
    echo "<p></p>";

    $res = findAndRemoveValue($values, $remove);

    var_dump($res);

    ?>

    <p><a href="../../../../index.php">Volver a inicio</a></p>
</body>
</html>
