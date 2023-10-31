<?php
$envSet = [];
if (file_exists(dirname(__FILE__).'/.env')) {
    $envSet = parse_ini_file(dirname(__FILE__).'/.env');
}
define("HOST", $envSet['DB_HOST']);
define("USER", $envSet['DB_USER']);
define("PASS", $envSet['DB_PASSWORD']);
define("NAME", $envSet['DB_NAME']);


$conn = new mysqli(HOST, USER, PASS, NAME);
return $conn;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}