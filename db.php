<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";


$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Database connection failed: " . $db->connect_error);
}
//echo "connection successfully";
