<?php

session_start();

require_once "../model/User.php";
require_once "../viewmodel/checkLoginData.php";

$testUser = new User(1, "test", "test");

$userNameErr = $passwordErr = $checkLogin = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $userNameErr = "This field is required";
    } else {
        $userNameErr = "";
    }
    if (empty($_POST["password"])) {
        $passwordErr = "This field is required";
    } else {
        $passwordErr = "";
    }

    $checkedUser = checkLoginData($testUser, $_POST["username"], $_POST["password"]);

    if (!$checkedUser instanceof User) {
        $checkLogin = "El nom i la contrasenya no coincideixen.";
    } else {
        $checkLogin = "Benvingut/da, " . $_POST["username"];
        $_SESSION["id"] = 1;
    }
}
