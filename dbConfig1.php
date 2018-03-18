<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'rgukt123';
$dbName = 'ecs';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    die("Connection faied: " . $db->connect_error);
}
?>
