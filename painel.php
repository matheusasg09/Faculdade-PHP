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
    <?php if(isset($_GET['mensagem'])): ?>
    <div class="alert alert-success mt-3" role="alert">
      <?php echo $_GET['mensagem']; ?>
    </div>
    <?php endif; ?>
    <h1 class="display-3">Usuários</h1>

    <table class="table table-triped table-striped table-hover table-dark w-100">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($users as $user): ?>
        <tr>
          <td><?php echo $user->id; ?></td>
          <td><?php echo $user->nome; ?></td>
          <td><?php echo $user->email; ?></td>
          <td>
            <a href="editar-usuario.php?id=<?php echo $user->id; ?>" class="btn btn-info">
              Editar
            </a>
            <a href="logica/usuarios/excluir.php?id=<?php echo $user->id; ?>" class="btn btn-danger">
              Excluir
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="criar-usuario.php" class="btn btn-success">
      Criar Novo Usuário
    </a>
  </div>

  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
</body>
</html>