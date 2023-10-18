<?php
$servername = "localhost";
$username = "root";
$password = "4dy5qwtrsag#!sad";
$dbname = "SwiftCodeStudios";

// Create connection in mysqli
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection in mysqli
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}