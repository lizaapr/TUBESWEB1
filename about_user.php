<?php
session_start();

if(!$_SESSION['username'])
{
  header ("Location: loginuser.php");
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

    <title>Hai KPOP</title>

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
            <li class="nav-item active">
              <a class="nav-link" href="about_user.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_user.php">Contact</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="services_user.php">Event</a>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Exit
              </a>
              <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EVENT KPOP
              </a> -->
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
      <h1 class="mt-4 mb-3">About
        <small>KPOP Concert</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="https://cdn.idntimes.com/content-images/community/2018/01/479-74f9ffb243496b2b5c6cd0005f4d79a8_600x400.png" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Demam acara K-POP di Indonesia</h2>
          <p>Berbagai artis K-POP profesional, senior tetap aktif dan berbagai artis barunya juga semakin bermunculan. Ketenaran mereka di dunia musik Asia pada khususnya sudah tak diragukan lagi. Pesona penampilan masing-masing musisi dan band K-POP selalu memiliki ciri khas, mulai dari tata gaya, koreografi dan lagu-lagu serunya. Hal ini lah yang menjadikan popularitas musik dan artisnya semakin kuat. Indonesia termasuk salah satu negara yang paling dilirik para bintang K-POP. Berbagai jenis acara, mulai dari konser, festival sampai fan meeting mereka tak jarang diselenggarakan di Indonesia.
            <br>
          <p>Permintaan tampil di depan publik para bintang K-POP ini semakin tinggi, dan inilah kesempatan Anda untuk bertemu idola K-POP Anda secara langsung. Apabila Anda mencari tempat jual-beli tiket konser K-POP yang aman, segera akses KPOPEvent. Anda dapat mengetahui berbagai jadwal konser K-POP baik itu di Indonesia tahun ini maupun yang terupdate lainnya di seluruh dunia.</p>
        </div>
      </div>
      <h2>KPOP Group</h2>
      <div class="row">
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="https://d1yw9ca99y6xou.cloudfront.net/thumbnails/670_446_got7-akan-tampilkan-versi-lain-lullaby-di-mama-2018_m_.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="https://www.sbs.com.au/popasia/sites/sbs.com.au.popasia/files/btsfesta2018cups.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://cdn2.tstatic.net/tribunnews/foto/bank/images/girlband-k-pop-asal-korea-selatan-aoa_20181012_205642.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="https://i.ytimg.com/vi/aiHSVQy9xN8/maxresdefault.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="https://media.tabloidbintang.com/files/thumb/blackpink-soompi.jpg/745" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="https://channel-korea.com/wp-content/uploads/2018/03/gfriend.jpeg" alt="">
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
