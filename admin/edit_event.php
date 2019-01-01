<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin| EventKPOP</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Admin| EventKPOP</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

     
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="indexadmin.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Events</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">
            <i class="fas fa-fw fa-table"></i>
            <span>User</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <form method="post" action="edit_makanan.php" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $re['id_event']; ?>">
                                    <p>NAMA EVENT</p>
                                    <input class="form-control" placeholder="nama_event" name="nama_event" type="text" value="<?php echo $re ['nama_event'];?> " autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $re['id_event']; ?>">
                                    <p>JADWAL</p>
                                    <input class="form-control" placeholder="nama_event" name="nama_event" type="text" value="<?php echo $re ['nama_event'];?> " autofocus>
                                </div>
                                <div class="form-group">
                                    <p>KISARAN</p>
                                    <input class="form-control" placeholder="kisaran_makanan" name="kisaran_makanan" type="text" value="<?php echo $re ['kisaran'];?>"autofocus >
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $re['id_event']; ?>">
                                    <p>GAMBAR</p>
                                    <input class="form-control" placeholder="nama_event" name="nama_event" type="text" value="<?php echo $re ['nama_event'];?> " autofocus>
                                </div>

                                <!-- <div class="form-group">
                                    <p>FOTO</p>
                                    <input type="file" name="image" class="form control"> 
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-success pull-right" type="submit" name="submit">Edit</button>      
                            </fieldset>
                        </form>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
    </div>
  </div>
</div>
</body>
</html>

      <?php
	include('../include/config.php');
  if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama_event = $_POST['nama_event'];
        $jadwal=$_POST['jadwal'];
        $kisaran = $_POST['kisaran'];
        $gambar= $nama_file;
        if ($nama_file == '') {
           echo "<script>alert('Masukan Gambar')</script>";
        // $poto= $nama_file;
        // if ($nama_file == '') {
        //    echo "<script>alert('Masukan Gambar')</script>";
        }
        if ($nama_event == '') {
          echo "<script>alert('masukan nama makanan')</script>";
          exit();
        if ($jadwal == '') {
          echo "<script>alert('masukan jadwal')</script>";
          exit();
        if ($kisaran == '') {
          echo "<script>alert('masukan nama makanan')</script>";
          exit();
        }
        $sql = "UPDATE event set nama_event='$nama_event', jadwal ='$jadwal, kisaran='$kisaran', gambar='$gambar' where id='$id'";
        $hasil = mysqli_query($conn, $sql);
        if ($hasil){
            print "<meta http-equiv=\"refresh\"content=\"1;URL=events.php\">";
        }else{
            echo "error".$sql;
        }
    }
}
?>