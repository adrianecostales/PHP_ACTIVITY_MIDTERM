<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "costalesdb";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection Error: " . $conn->connect_error;
}

?>