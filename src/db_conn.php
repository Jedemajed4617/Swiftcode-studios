<?php
$servername = "mariadb";
$username = "root";
$password = "your_password";
$dbname = "SwiftCodeStudios";

// Create connection in mysqli
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection in mysqli
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
