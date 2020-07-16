<?php

require __DIR__ . "/../conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['password'];

$sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: /painel.php');