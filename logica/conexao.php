<?php

$host = 'localhost';
$database = 'banco_de_dados';
$username = 'root';
$password = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}