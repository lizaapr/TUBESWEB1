<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>3 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="logooo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php?konten=about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php?konten=disclaimer">Disclaimer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php?konten=tos">Term Of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>
  
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      
        <div class="row">
          <div class="col-lg-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="5.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="6.jpg" alt="Second slide">
                </div>
              </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>
          <br>
          </div>
        <?php 
            
            include 'Admin/pages/koneksi.php';                        
                  session_start();
                                        $sql = "SELECT * FROM artikel1 ORDER BY id_artikel DESC";
                                        $res_data = mysqli_query($koneksi,$sql);
                                     
                                        while($row = mysqli_fetch_array($res_data)){

                                            $id_artikel =$row[0];
                                            $judul=$row[1];  
                                            $kategori=$row[2];
                                            $deskripsi=$row[3];
                                            $img_artikel="admin/pages/images/".$row[4]; 
        ?>


      
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
           <?php echo " <a href='artikel.php?id_artikel=$id_artikel'><img width='500' height='200' class='card-img-top'src=".$img_artikel."></a>";?>
            <div class="card-body">
              <h4 class="card-title">
               <?php  echo "<a href='artikel.php?id_artikel=$id_artikel'>".$judul."</a>"; ?> 
              </h4>
              <?php   echo substr($deskripsi, 0,250); ?>
              
            </div>
          </div>
        </div>
     
      <!-- /.row -->

           <?php } ?>         
         <br><br><br>
          </div>

      <!-- Pagination -->
     

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
