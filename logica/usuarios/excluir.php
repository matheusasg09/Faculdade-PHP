<?php

require __DIR__ . "/../conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: /painel.php');