<?php
//Database credentials
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '123456';
$dbName     = 'gomo';

//Connect and select the database
$db = new mysqli('localhost', 'root', '123456', 'gomo');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>