<?php

require_once "../viewmodel/validateData.php";
require_once "../viewmodel/tests.php";
global $nom;
global $cognom;
global $email;
global $dataNaixement;

global $nomErr;
global $cognomErr;
global $emailErr;
global $dataErr;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 01</title>
</head>
<body>
    <h1>Exercici 01</h1>
    <h2>Introduce tus datos</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <p>Nom: <input type="text" name="nom" value="<?php echo $nom; ?>" /> <?php echo $nomErr; ?></p>
        <p>Cognom: <input type="text" name="cognom" value="<?php echo $cognom; ?>" /> <?php echo $cognomErr; ?></p>
        <p>Email: <input type="email" name="email" value="<?php echo $email; ?>" /> <?php echo $emailErr; ?></p>
        <p>Data de naixement: <input type="date" name="data-naixement" value="<?php echo $dataNaixement; ?>" /> <?php echo $dataErr; ?></p>
        <input type="submit" />
    </form>

    <p>
        <ul>
            <li><?php echo $nom; ?></li>
            <li><?php echo $cognom; ?></li>
            <li><?php echo $email; ?></li>
            <li><?php echo $dataNaixement; ?></li>
        </ul>
    </p>
    <p><a href="../../../../index.html">Volver a inicio</a></p>
</body>
</html>
