<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card pt-3">
      <div class="login-logo">
        LOGIN
      </div>
      <div class="card-body login-card-body">
        <p class="login-box-msg">Insira seus dados para fazer login</p>

        <form action="logica/autenticacao/testarLogin.php" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" value="admin@admin.com" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" value="admin123" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">
                Entrar
              </button>
            </div>
          </div>
          <?php if(isset($_GET['erro'])): ?>
          <div class="alert alert-danger mt-3" role="alert">
            Ops, verifique suas credenciais
          </div>
          <?php endif; ?>
        </form>
      </div>
    </div>
  </div>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
</body>
</html>