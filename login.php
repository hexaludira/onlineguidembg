<?php
//include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Guide</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <p class="login-box-msg"><img src="dist/img/tittle.png" style="width:200px;height:180px;"></p>
      <a class="h6">One Guide to Guide Them All</a><br>
    </div>
      <div class="card-body">
        <form action="" method="post">
          <!-- <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
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
                Remember Me
                </label>
              </div>
            </div> -->
              <div class="col-md-12">
                <a href="index.php" type="submit" class="btn btn-primary btn-block" name="buttonLogin" id="clicker">Sign In</a>
              </div>
            </div>
            <br>
            <!-- version -->
            <div>
            <p class="login-box-msg"><a class="h10">ver BETA</a><br></p>
            </div>
            <!-- /.version -->
      </form>
    </div>
  </div>
  <br>
</div>
<!-- /.login-box -->
<div class="system-box">
  <p class="login-box-msg">
    <a href="http://192.168.10.8:8080"><img src="dist/img/wms.png" style="width:70px;height:30px;"></a>
    <a href="http://192.168.10.8:8081"><img src="dist/img/mesc.png" style="width:60px;height:20px;"></a>
    <img src="dist/img/mesf.png" style="width:80px;height:30px;">
    <img src="dist/img/lapormas.png" style="width:95px;height:25px;">
    <img src="dist/img/itinventory.png" style="width:120px;height:30px;">
    <img src="dist/img/hris.png" style="width:60px;height:20px;">
    <img src="dist/img/it.png" style="width:60px;height:40px;">
    <img src="dist/img/ga.png" style="width:30px;height:18px;">
    </p>
</div>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

<?php
// if (isset($_POST['buttonLogin'])) {
//   $passMD5 = MD5($_POST['password']);
//   $sql_login = "SELECT * FROM user WHERE user.email='" . $_POST['email'] . "' AND user.password='$passMD5'";
//   $query_login = mysqli_query($koneksi, $sql_login);
//   $data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
//   $jumlah_login = mysqli_num_rows($query_login);


//   if ($jumlah_login == 1) {
//     session_start();
//     $_SESSION["ses_id"] = $data_login["id_user"];
//     $_SESSION["ses_username"] = $data_login["email"];
//     $_SESSION["ses_nama"] = $data_login["username"];
//     $_SESSION["ses_menuwms"] = $data_login["menu_wms"];
//     $_SESSION["ses_menumesc"] = $data_login["menu_mesc"];
//     $_SESSION["ses_menumesf"] = $data_login["menu_mesf"];
//     $_SESSION["ses_menulapormas"] = $data_login["menu_lapormas"];
//     $_SESSION["ses_menuitinventory"] = $data_login["menu_itinventory"];
//     $_SESSION["ses_menuhris"] = $data_login["menu_hris"];
//     $_SESSION["ses_menuit"] = $data_login["menu_it"];
//     $_SESSION["ses_menuga"] = $data_login["menu_ga"];
//     $_SESSION["ses_level"] = $data_login["id_level"];

//     header("Location: index.php");
//     exit();
//   }
// }
?>