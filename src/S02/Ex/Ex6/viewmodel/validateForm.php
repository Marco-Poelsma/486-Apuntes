<?php

$emptyErr = "";

$value = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["value"]) || gettype($_POST["value"]) != "string") {
        $emptyErr = "Introduce un número entero";
    } else {
        $value = (string) $_POST["value"];
        $emptyErr = "";
    }
}
