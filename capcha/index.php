 <?php
    require_once("koneksi.php");
    if (!isset($_SESSION)){
    session_start();
  }
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form name="login" method="post" action="aksi_cek_login.php">
            <div class="form-group">
              <label for="username">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div>  
          <label style="color: white">Captcha</label>
          <input name="kodeval" type="text" id="kodeval" size="6" maxlength="6" />
            <img src="security_image.php" width="75" height="25" alt="Kode Acak" />
          </div>
            <div class="form-group">
              <div align="center">
               <input type="submit" name="submit" class="btn btn-primary" value="LOGIN">
                <a href="indexadmin.php"></a>
              </div>
            </div>  
          </form>
          <div class="text-center">
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  </body>

</html>
