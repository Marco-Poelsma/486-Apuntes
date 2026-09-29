<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S02 - Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>

    <h2>Usando substrings</h2>
    <?php
    require_once "../viewmodel/string.php";
    global $substring;

    ?>
    <p>
        <?php echo $substring; ?>
    </p>

    <h2>Usando Explode</h2>

    <?php
    require_once "../viewmodel/explode.php";
    global $exploded;

    ?>

    <p>
        <?php echo $exploded[4]; ?>
    </p>
</body>
</html>
