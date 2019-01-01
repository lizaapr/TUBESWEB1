<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script type="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="tinymce/tinymce.js"></script>
    <script type="text/javascript">
    tinyMCE.init({
      selector:"#mytextarea"

    });
  </script>
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Daftar Akun</div>
        <div class="card-body">
          <form action="daftaruser.php" method="POST">
            <div class="form-group">
              <input class="form-control" placeholder="Username" type="text" name="username" autofocus>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Email" type="text" name="email" autofocus>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Phone" type="text" name="phone" autofocus>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" type="password" name="password" autofocus>
            </div>
            <div class="form-group">
              <textarea name="alamat" id="mytextarea" class="form-control" rows="5" placeholder="alamat"></textarea>
                  </div>
            <div class="form-group">
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register">
            </div>
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
 
<?php  
      
    include("include/config.php");  
      
    if(isset($_POST['register']))  
    {  
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        $alamat =$_POST['alamat'];

        if ($username == '') {
          echo "<script>alert('masukan username')</script>";
          exit();
        }
         if ($phone == '') {
          echo "<script>alert('masukan no hp')</script>";
          exit();
        }
         if ($email == '') {
          echo "<script>alert('masukan email ')</script>";
          exit();
        }
         if ($password == '') {
          echo "<script>alert('masukan password')</script>";
          exit();
        }
         if ($alamat == '') {
          echo "<script>alert('masukan alamat')</script>";
          exit();
        }

        $check_email_query="select * from user where email='$email'";
        $run_query=mysqli_query($conn, $check_email_query);
      
        if(mysqli_num_rows($run_query) > 0){  
          echo "<script>alert('Email $email ini sudah dipakai, Please try another one!')</script>";
          exit();
        }
        $sql ="INSERT INTO user (username,phone,email,password,alamat) values ('$username','$phone','$email','$password',$alamat)";
        if(mysqli_query($conn,$sql)){
            echo "<script>window.open('loginuser.php','_self')</script>";
        }
        
   }  
?>