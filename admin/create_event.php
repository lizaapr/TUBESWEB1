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
          <a class="nav-link" href="events.php">
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
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Events</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
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
                        <form method="post" action="create_event.php" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <p>NAMA EVENT</p>
                                    <input class="form-control" placeholder="nama_event" name="nama_event" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <p>JADWAL</p>
                                    <input class="form-control" placeholder="jadwal" name="jadwal" type="text" autofocus >
                                </div>
                                 <div class="form-group">
                                    <p>KISARAN</p>
                                    <input class="form-control" placeholder="kisaran" name="kisaran" type="text" autofocus >
                                </div>
                                <div class="form-group">
                                    <p>GAMBAR</p>
                                    <input type="file" name="image" class="form control"> 
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-success pull-right" type="submit" name="submit">Masuk</button>      
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
    include'koneksi.php';
        $set = true;
       //tentukan variabel file yg diupload dan tipe file
       if (isset($_FILES['image'])) {
           $tipe_file  = $_FILES['image']['type'];
            $lokasi_file = $_FILES['image']['tmp_name'];
            $nama_file  = $_FILES['image']['name'];
            $save_file =move_uploaded_file($lokasi_file,"images/".$nama_file);
        }
        

            if(empty($lokasi_file)){
                $set=false;
            }
            else{
            //tentukan tipe file harus img_artikel 
            if ($tipe_file != "image/gif" and
                $tipe_file != "image/jpeg" and
                $tipe_file != "image/jpg" and
                $tipe_file != "image/jpeg" and
                $tipe_file != "image/png")
            {
            $set=false;
            echo "<script>alert('Upload gagal, tipe file harus image')</script>";
        }
        else
        {
          isset($save_file);
        }
        //replace di server 
        if($save_file)
        {
            chmod("images/$nama_file", 0777);
        }
        else
        {
            echo "<script>alert('Upload image gagal !')</script>";
            $set =  false;
        }
    }

        if(isset($_POST['submit']) && $set){
            include 'koneksi.php';
 
            $nama_event  = $_POST['nama_event'];
            $jadwal   =  $_POST['jadwal'];
            $kisaran  =  $_POST['kisaran'];
            if($nama_event && $jadwal && $kisaran){
                    $in = mysqli_query($koneksi, "INSERT INTO event (nama_event,jadwal,kisaran,gambar) VALUES('$nama_event', '$jadwal','$kisaran','$nama_file')");
                    if(!$in){
                        die('query error'. mysqli_error($koneksi));
                    }
                    if($in){
                        echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="create_event.php";</script>';
                    }else{
                        echo '<div id="error">Uppsss...! Query ke database gagal dilakukan!</div>';
                    }
                
            }else{
                echo '<div id="error">Uppsss...! Lengkapi form!</div>';
            }
        }
        ?>