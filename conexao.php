<?php
$hostname = "localhost";
$database = "usuario";
$username = "root";
$password = "";

$pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);