<?php
session_start();

if (isset($_SESSION['logged']['email'])) {
  header('location: ./pages/scripts/login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ZaliczenieTeb-IngaC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--"moja grafika"-->
  <link rel="stylesheet" type="text/css" href="dist/css/moje/background.css">

</head>
<body class="hold-transition login-page bg">
<div class="login-box">
  <div class="login-logo">
    <?php
    if (isset($_GET['register']) || isset($_GET['logout']) || isset($_GET['active'])) {
      echo <<<ERROR
        <div class="card bg-success">
          <div class="card-header cento">
          <div class="row">
          <div class="col-10">
    ERROR;

            if (isset($_GET['register'])) {
              echo '<h3 class="card-title">Rejestracja przebiegła pomyślnie.<br> Sprawdź maila! </h3>';
            } else if(isset($_GET['active'])){
              echo '<h3 class="card-title">Konto zostało aktywowane! Zaloguj się :D</h3>';
            } else if($_GET['logout']){
              echo '<h3 class="card-title">Wylogowano. Do zobaczenia wktórtce!</h3>';
            }

      echo <<<ERROR
            </div>
            <div class="col-2">
            <ion-icon name="checkmark-outline"></ion-icon>
            </div>
            </div>
          </div>
       </div>
    ERROR;
    }

    if (isset($_SESSION['error'])) {
      echo <<<ERROR
        <div class="card bg-danger">
          <div class="card-header">
            <h3 class="card-title">$_SESSION[error]</h3>
          </div>
       </div>
    ERROR;
      unset($_SESSION['error']);
    }
    ?>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Zaloguj się</p>

      <form action="pages/scripts/login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Pamiętaj mnie
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Zaloguj</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- LUB -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Zaloguj się przez Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Zaloguj się poprzez Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Nie pamiętam hasła</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Zarejestruj się</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
