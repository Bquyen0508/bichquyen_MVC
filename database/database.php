<?php
$hostname = "localhost";
$database = "demo_db";
$username = "root";
$password = "";

$db = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($db, $username, $password);
?>
