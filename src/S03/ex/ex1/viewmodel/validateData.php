<?php

require_once("../viewmodel/tests.php");
global $test_text;
global $test_email;
global $test_birth;

$nom = $cognom = $email = $dataNaixement = "";

$nomErr = $cognomErr = $emailErr = $dataErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nom"]) || !test_text($_POST["nom"])) {
        $nomErr = "Es requereix un nom vàlid";
    } else {
        $nom = $_POST["nom"];
    }
    if (empty($_POST["cognom"]) || !test_text($_POST["cognom"])) {
        $cognomErr = "Es requereix un cognom";
    } else {
        $cognom = $_POST["cognom"];
    }
    if (empty($_POST["email"]) || !test_email($_POST["email"])) {
        $emailErr = "Es requereix un email";
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["data-naixement"]) || !test_birth($_POST["data-naixement"])) {
        $dataErr = "Es requereix una data de naixement. Edat major a 18 anys.";
    } else {
        $dataNaixement = $_POST["data-naixement"];
    }
}
