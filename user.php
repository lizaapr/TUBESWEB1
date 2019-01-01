<?php
session_start();
if (!$_SESSION['username'])
 {
  header("Location: loginuser.php");
}
$user = $_SESSION['user'];
?>

<!DOCTYPE .php>
<php lang="en">

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
            <li class="nav-item">
              <a class="nav-link" href="services_user.php">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_user.php">Contact</a>
            </li>
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
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://channel-korea.com/wp-content/uploads/2017/10/twice-5.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>TWICE</h3>
              <p>AYO LIHAT IDOLAMU SEKARANG!</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://cdn2.tstatic.net/wow/foto/bank/images/blackpink_20170727_183113.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>BLACKPINK</h3>
              <p>AKAN HADIR DI JAKARTA!!</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://farm2.staticflickr.com/1491/26540363366_b38df37e66_o.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>BTS</h3>
              <p>TUNGGU APALAGI LIHAT EVENTNYA!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Temukan Jadwal Konser Idolamu Sekarang!</h1>
      <h2>EVEN KPOP</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://cdn2.tstatic.net/bangka/foto/bank/images/anggota-blackpink_20180811_140831.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">BLACKPINK</a>
              </h4>
              <p class="card-text">Catat Tanggalnya! BLACKPINK AKAN HADIR DI JAKRTA TANGGAL 11 JANUARI 2019</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://channel-korea.com/wp-content/uploads/2017/12/1200x630sr.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">iKon</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://daebaknews.co/web/wp-content/uploads/2018/08/EXO.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">EXO</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://1.bp.blogspot.com/-6yhrafld7w4/VvtB5fIPzXI/AAAAAAAAKDE/4wO-HvBjjUEQb4ozPg6ecWpuRNGABt25A/s1600/RedVelvet.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Red Velvet</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://c1.staticflickr.com/5/4273/34833141790_19b2d79f15_o.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">BTS</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://cdn.idntimes.com/content-images/community/2018/07/73a8dddcd215d7650a413451115e21a2_600x400.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">GOT7</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h1>Lagu KPOP Terbaru</h1>
          <h4>Ke Konser Kpop Secara LIVE</h4>
          <p>Acara-acara live K-POP selalu ramai diperbincangkan dan kami di Tickid KPOP tahu bahwa para penggemar ingin dan layak menjadi bagian dari berbagai acara seperti konser, festival, fans meeting K-POP. Itu sebabnya kami hadir menawarkan alternatif yang praktis dalam membuat media informasi kepada pengemar menganai event apa saja yang akan dilakukan sang idola. Temukan berbagai jadwal konser idola K-POP Anda tahun ini. Jangan sampai kelewatan!</p>
        </div>
        <iframe width="420" height="315"
src="https://www.youtube.com/embed/pSudEWBAYRE?autoplay=1">
<!-- https://www.youtube.com/watch?v=pSudEWBAYRE -->
</iframe>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Hubungi CS Kami:
          </p>
          <h1>+628966172873</h1>
          <p> Senin - Jum'at </p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call for Details</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Lizaap 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</php>
