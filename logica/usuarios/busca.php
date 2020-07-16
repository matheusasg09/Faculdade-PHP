<?php

require __DIR__ . "/../conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetchAll(PDO::FETCH_OBJ)[0];