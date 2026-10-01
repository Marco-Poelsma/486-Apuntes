<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../../../../styles/reset.css" />
    <link rel="stylesheet" src="../../../../styles/styles.css" />
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
    require_once "../viewmodel/validateForm.php";
    require_once "../viewmodel/sumDigits.php";
    require_once "../viewmodel/countDigits.php";
    global $emptyErr;
    global $value;
    ?>
    <h1>Ejercicio 6</h1>
    <!-- https://www.w3schools.com/php/php_form_validation.asp -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <p>Introduce un número: <input type="number" name="value" value="<?php echo $value; ?>" />
        <span class="error">* <?php echo $emptyErr;?></span>
        </p>
    <br>
    <p id="required-info">* Campo requerido</p>
    <br>
    <button action="submit">Validar!</button>
    </form>

    <p>El valor <?php echo $value; ?> tiene <strong><?php echo countDigits((int) $value); ?></strong> cifras. La suma de todas sus cifras es de <strong><?php echo sumDigits((int) $value); ?></strong>.</p>
    <p><a href="../../../../index.html">Volver a inicio</a></p>
</body>
</html>
