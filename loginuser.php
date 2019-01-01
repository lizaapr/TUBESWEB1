<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

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
         <form action="loginuser.php" method="POST">
            <div class="form-group">
              <div class="form-group">
              <input class="form-control" placeholder="Username" type="text" name="username" autofocus>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" type="password" name="password" autofocus>
            </div>
            <div class="form-group">
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login">
            </div>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="daftaruser.php">Register an Account</a>
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
      
    if(isset($_POST['login']))  
    {  

        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";  
        $result = mysqli_query($conn, $sql); 
              
        if(mysqli_num_rows($result) > 0)  
        {  
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row["id_user"];
                $username = $row["username"];
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['user'] = $user;
                
            }
            header("Location: user.php");
                  
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')
          </script>";  
        }  
    }  
?>