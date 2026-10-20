<?php

$servername = "db";
$username = "";
$password = "";
$dbname = "amazon";

$user = "' OR id = 1# '";
$pass = "";

$conn = mysqli_connect("db", "root", "rootpassword", "amazon");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios WHERE username = '" . $user . "' AND password = '" . $pass . "';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Credenciales incorrectas.";
}

$conn->close();
