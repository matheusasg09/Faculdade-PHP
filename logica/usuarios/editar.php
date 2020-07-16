<?php

require __DIR__ . "/../conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['password'];
$confirmacaoSenha = $_POST['password_confirm'];

if ($senha != $confirmacaoSenha) {
  header("Location: /editar-usuario.php?id=$id&erroSenha");
  exit;
} else {
  if ($senha) {
    $sql = "UPDATE users SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
  } else {
    $sql = "UPDATE users SET nome = '$nome', email = '$email' WHERE id = $id";
  }

  $stmt = $conn->prepare($sql);
  $stmt->execute();

  header('Location: /painel.php?mensagem=Senha alterada com sucesso!');
}