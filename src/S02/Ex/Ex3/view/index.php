<?php

namespace ex3;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../../../../styles/reset.css" />
    <link rel="stylesheet" src="../../../../styles/styles.css" />
    <title>Ejercicio 3</title>
</head>
<body>
    <?php

    require_once "../viewmodel/countOcurrences.php";
    $usa = countOcurrences("USA", 1);
    $northAmerica = countOcurrences("North America", 2);

    ?>

    <h1>Ejercicio 3</h1>
    <ul>
        <li>
            <p>Número de veces que se ha mencionado <strong>USA</strong> en la lista:
                <?php echo $usa; ?>
            </p>
        </li>
        <li>
            <p>Número de veces que se ha mencionado <strong>North America</strong> en la lista:
                <?php echo $northAmerica; ?>
            </p>
        </li>
    </ul>

    <p><a href="../../../../index.html">Volver a inicio</a></p>
</body>
</html>
