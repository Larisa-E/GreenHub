<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "greenhub_db";

// create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
