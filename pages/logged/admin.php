<?php
session_start();



if (!isset($_SESSION['logged']['email'])) {
   header('location: ../../login.php');
     exit();
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Witaj!</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
          echo "<img src=\"../../dist/css/moje/{$_SESSION['logged']['avatar']}\" class='img-circle elevation-2' alt='User Image'>";
        ?>
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
              echo $_SESSION['logged']['name'], ' ', $_SESSION['logged']['surname'];
            ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kokpit</a></li>
              <li class="breadcrumb-item active">Główna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ostatnio utworzeni</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <?php
                  require_once '../scripts/connect.php';
            $sql ="SELECT * FROM `user` ORDER BY creationdate DESC limit 8";
            $result = $conn->query($sql);
            while($user1 = $result->fetch_assoc()){
                    echo <<<USER
                    <li class="item">
                <div class="product-img">
                  <img src="../../dist/css/moje/$user1[avatar]" alt="User Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">$user1[name] $user1[surname]</a>
                  <span class="product-description">

USER;

                    //obliczenie ile dni temu zostało dodane konto
                    //wyszukujemy - dzisiaj, wczoraj, ile dni temu(do miesiaca), miesiac temu, r
                    require_once '../scripts/function.php';

                    $creationdate = $user1['creationdate'];
                    echo countDay($creationdate);

                    echo <<<USER
                    </span>
                  </div>
                </li>
USER;
              }
                    ?>

                </ul>
              </div>

            </div>
            <!-- /.card -->
          </div>

          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ostatnio zalogowani</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <?php
                  require_once '../scripts/connect.php';
            $sql ="SELECT * FROM `user` ORDER BY last_login DESC limit 8";
            $result = $conn->query($sql);
            while($user1 = $result->fetch_assoc()){
                    echo <<<USER
                    <li class="item">
                <div class="product-img">
                  <img src="../../dist/css/moje/$user1[avatar]" alt="User Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">$user1[name] $user1[surname]</a>
                  <span class="product-description">

USER;

                    //obliczenie ile dni temu zostało dodane konto
                    //wyszukujemy - dzisiaj, wczoraj, ile dni temu(do miesiaca), miesiac temu, r
                    require_once '../scripts/function.php';

                    $last_login = $user1['last_login'];
                    echo countDay($last_login);

                    echo <<<USER
                    </span>
                  </div>
                </li>
USER;
              }
                    ?>

                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>

            </div>
            <!-- /.card -->
          </div>


        </div>
        <div class="row">
          <div class="col-4">

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Aktywni/Nieaktywni</h3>
                <div id="dom-target" style="display: none;">
                    <?php
                        $sql = "SELECT active, count(*) as 'num' FROM `user` GROUP BY `active`";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                                if ($row['active'] == 0) {
                                  echo <<<DIV
                                  <div hidden id="inactive">
                                {$row['num']}
                                </div>
DIV;
                              }else if($row['active'] == 1) {
                                echo <<<DIV
                                 <div hidden id = "active">
                                {$row['num']}
                                </div>
DIV;
                                }
                              }

                    ?>
                </div>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>

              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <div class="col-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Spis użytkowników</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="search" class="form-control form-control-sm" placeholder="szukaj*" aria-controls="test">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table id="test" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Imie</th>
                      <th>Nazwisko</th>
                      <th>Status</th>
                      <th>Typ</th>
                      <th>Ostatnie logowanie</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
        require_once '../scripts/connect.php';

        $sql = "SELECT name, surname, active, last_login, permission FROM `user` as u INNER JOIN `permission` as p ON u.permissionid=p.id ORDER BY permissionid";

        $result = $conn->query($sql);

        if ($result->num_rows != 0) {
          while($user = $result->fetch_assoc()){
            echo <<<USER
              <tr>
                <td>
                  $user[name]
                </td>
                <td>
                  $user[surname]
                </td>

                <td>
USER;
            switch ($user['permission']) {
              case 'admin':
                echo '<span class="badge badge-info">';
              break;

              case 'user':
                echo '<span class="badge badge-success">';
                break;

              case 'moderator':
                echo '<span class="badge badge-warning">';
                break;
            }

            echo <<<USER
                    $user[permission]
                  </span>
                </td>

                <td>
USER;
            switch ($user['active']) {
              case '0':
                echo '<span class="badge badge-danger">';
                $active = 'zablokowany';
              break;

              case '1':
                echo '<span class="badge badge-success">';
                $active = 'aktywny';
                break;

            }

            echo <<<USER
                    $active
                  </span>
                </td>


                <td>
                  <div class="sparkbar" data-color="#00a65adata-height="20">
USER;
            if ($user['last_login'] == NULL) {
              echo 'Brak logowania';
            }else{
              echo $user['last_login'];
            }
            echo <<<USER

                  </div>
                </td>
              </tr>
USER;
          }
        }else{
          echo <<<EMPTYROW
          <tr>
            <td colspan="2">Brak użytkowników w bazie danych</td>
          </tr>
EMPTYROW;
        }
      ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


              <!-- Bar chart -->
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <?php
                  $sql = $sql = "SELECT permission, count(*) as 'num' FROM `user` as u INNER JOIN `permission` as p ON u.permissionid=p.id GROUP BY `permissionid` ORDER BY p.id";
                  $result = $conn->query($sql);
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                      $tab[$i] = $row['num'];
                      $i++;
                    }
                    echo <<<DIV
                    <div hidden id="admin">
                    {$tab[0]}
                    </div>
                    <div hidden id="moderator">
                    {$tab[1]}
                    </div>
                    <div hidden id="user">
                    {$tab[2]}
                    </div>
DIV;

                   ?>
                  <h3 class="card-title">
                    Bilans władzy
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div id="bar-chart" style="height: 300px;"></div>
                </div>
                <!-- /.card-body-->
              </div>

        </div>
        </div>
    </section>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/flot/jquery.flot.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var inactive = $('#inactive').html()
    var active = $('#active').html()
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Aktywni',
          'Nieaktywni',


      ],
      datasets: [
        {
          data: [active,inactive],
          backgroundColor : ['#f56954', '#00a65a'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })


    })
    </script>
    <script>

    $(document).ready(function () {
      var admin = $('#admin').html()
      var moderator = $('#moderator').html()
      var user = $('#user').html()

          var bar_data = {
            data : [[1,admin], [2,moderator], [3,user]],
            bars: { show: true }
          }
          $.plot('#bar-chart', [bar_data], {
            grid  : {
              borderWidth: 1,
              borderColor: '#f3f3f3',
              tickColor  : '#f3f3f3'
            },
            series: {
               bars: {
                show: true, barWidth: 0.7, align: 'center',
              },
            },
            colors: ['#3c8dbc'],
            xaxis : {
              ticks: [[1,'Admini'], [2,'Moderatorzy'], [3,'Użytkownicy']]
            }

          })



  $.widget.bridge('uibutton', $.ui.button)
  $('#test').dataTable({
    "pagging": false,
    "ordeing": false,
    "info": false,
    "lenghtChange": false
  });
});

</script>
</body>
</html>
