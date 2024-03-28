<?php

// dbConnect.php
global $host, $dbname, $user, $password;
require 'dbconfig.php';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

try {
    $DBH = new PDO($dsn, $user, $password);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Could not connect to database.";
    file_put_contents('PDOErrors.txt', 'dbConnect.php - ' . $e->getMessage(), FILE_APPEND);
}

