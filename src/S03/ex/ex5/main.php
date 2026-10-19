<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "copy_world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM city";
// Execute the SQL query
$result = $conn->query($sql);

// Process the result set
if ($result->num_rows > 0) {
// Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo $row["ID"] . ". " . $row["Name"] . " (" . $row["CountryCode"] . "):<br>";
        echo "<tab>District: " . $row["District"] . " | Population: " . $row["Population"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
