<?php
session_start();

if(!$_SESSION['username'])
{
  header("Location: user.php")
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HaiKPOP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">KPOPEvent</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about_user.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services_user.php">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_user.php">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EVENT KPOP
              </a>
                          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Exit
              </a>
              <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.php">1 BLACKPINK</a>
                <a class="dropdown-item" href="portfolio-2-col.php">2 EXO</a>
                <a class="dropdown-item" href="portfolio-3-col.php">3 BTS</a>
                <a class="dropdown-item" href="portfolio-4-col.php">4 RED VELVET</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                <?php
                 echo "$user";
                ?>
              </a>
              <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
          </ul>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">EVENT
        <small>TERDEKAT</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Event</li>
      </ol>

      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="https://ih1.redbubble.net/cover.920387.1200x300.jpg" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">BLACKPINK in JAKARTA</h4>
            <div class="card-body">
              <a href="#"><img class="card-img-top" src="https://asset.kompas.com/crop/0x0:800x533/750x500/data/photo/2018/06/21/3904038938.jpg" alt=""></a>
              <p class="card-text">SAB</p>
              <p> 23 Februari 2019</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
             <h4 class="card-header">Stray Kids in Jakarta</h4>
            <div class="card-body">
            <a href="#"><img class="card-img-top" src="http://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2018/04/23/2751200714.jpg" alt=""></a>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">GOT7 in Jakarta</h4>
            <div class="card-body">
              <a href="#"><img class="card-img-top" src="https://cdn.idntimes.com/content-images/community/2018/07/73a8dddcd215d7650a413451115e21a2_600x400.jpg" alt=""></a>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
