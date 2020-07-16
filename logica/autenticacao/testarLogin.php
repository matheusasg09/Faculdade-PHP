<?php

require '../conexao.php';

$emailDigitado = $_POST['email'];
$senhaDigitada = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$emailDigitado' AND senha = '$senhaDigitada'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ);


if ($result) {
  session_start();

  $_SESSION['usuario'] = $result[0];

  header('Location: /painel.php');
  exit;
} else {
  header('Location: /login.php?erro');
  exit;
}