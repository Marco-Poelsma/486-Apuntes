<?php

require_once "../viewmodel/validateData.php";
require_once "../viewmodel/checkLoginData.php";
require_once "../model/User.php";

global $userNameErr;
global $passwordErr;
global $checkLogin;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <p><input type="text" name="username" /> <?php echo $userNameErr; ?></p>
        <p><input type="password" name="password" /> <?php echo $passwordErr; ?></p>
        <input type="submit" />
    </form>
    <p>
        <?php echo $checkLogin; ?>
    </p>
    <p><a href="../../../../index.html">Volver a inicio</a></p>
</body>
</html>
