<?php

session_start();

if (!isset($_SESSION['usuario'])) {
  header("location: login.php");
}

require 'logica/usuarios/consulta.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>
<body class="hold-transition sidebar-mini">
  <?php require 'parts/sidebar.php'; ?>
  <div style="margin-left: 300px; margin-top: 30px; padding-right: 30px; height: calc(100vh - 30px);">
    <h1 class="display-3">Criar um usuario</h1>

    <form method="post" action="logica/usuarios/criar.php">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-success">Criar Usuário</button>
    </form>
  </div>

  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
</body>
</html>