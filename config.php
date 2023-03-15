<?php

$dbServer = 'localhost';
$dbName = 'fantasy_league';
$dbUsername = 'root';
$dbPassword = '';

/* $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$connection) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
} */

try {
    $conn = new PDO("mysql:host=$dbServer;dbname=$dbName", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }