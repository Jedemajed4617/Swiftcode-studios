<?php
$envSet = [];
if (file_exists(dirname(__FILE__).'/.env')) {
    $envSet = parse_ini_file(dirname(__FILE__).'/.env');
}
$HOST = $envSet['DB_HOST'];
$USER = $envSet['DB_USER'];
$PASS = $envSet['DB_PASSWORD'];
$NAME = $envSet['DB_NAME'];


$conn = new mysqli($HOST, $USER, $PASS, $NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;