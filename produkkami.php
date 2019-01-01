<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Frontpage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.gakgaptek.com"><img src="picticon/facebook.png"/></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.gakgaptek.com"><img src="picticon/instagram.png"/></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><img src="picticon/whatsapp.png"/> : 083824976815</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
      &nbsp; &nbsp;
       <div class="button">
        <a href="login.php" class="btn btn-dark">LOGIN</a>
      </div> 
    </form>
    </div>
      </div>
    </div>
    </nav>
    <br>

    <div class="container">
      <div class="row">
        <div class="col-md-12 navbar-expand-lg">
          <a href="indexuser.php">
          <img  width="300" height="75" src="pictlogo/logo.png">
        
    <br>
      <div class="row black bg-dark">    
        <div class="col-md-4">
          <a href="aboutus.php">
          <h2 align="center" style="font-size: 20px;color: white;">TENTANG KAMI</h2></a>
          </div>
          <div class="col-md-4">
            <a href=produkkami.php>
            <h2 align="center" style="font-size: 20px ;color: white;">PRODUK KAMI</h2></a>
            </div>
            <div class="col-md-4">
              <a href=workshop.php>
              <h2 align="center" style="font-size: 20px ;color: white;">WORKSHOP KAMI</h2></a>
            </div>
      </div>
      
          <br>
        
          <div class="row">
            <div class="col-md-12">
              <div align="center">
                <h2>PRODUK KAMI</h2>
              </div>
            </div>
          </div>
          </div>
          
        

         <?php 
            include 'koneksi.php';  
             
                                        $sql = "SELECT * FROM produk ORDER BY id_produk DESC";
                                        $res_data = mysqli_query($connect,$sql);
                                        while($row = mysqli_fetch_array($res_data)){
                                            $id_produk =$row[0];
                                            $nama_produk=$row[1];  
                                            $deskripsi=$row[2];
                                            $harga = $row[3];
                                            $img_produk="Admin/pages/imagesproduk/".$row[4]; 
        ?>

     <div class="col-lg-4 col-sm-4 portfolio-item">
          <div class="card h-100">
           <?php echo "<img width='500' height='200' class='card-img-top'src=".$img_produk.">";?>
            <div class="card-body">
              <h4 class="card-title">
               <?php  echo "".$nama_produk.""; ?> 
              </h4>
              <div align="justify">
                <?php   echo substr($deskripsi, 0,250); ?>
              </div>
              <p><?php echo "<b>Harga = Rp ".$harga." / Dus</b>"; ?></p>
              <br><br><br>
              <?php 
                $id_produk=$row[0];

               echo "<a href='login.php' class='btn btn-primary'>Beli Sekarang</a>  "; 
               ?>
                          
            </div>
          </div>
        </div>

    <!--  -->
        
          <?php } ?> 
         <br><br><br>


      </div>
         

      </div>  
  
      <!-- /.row -->

 

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Prosomi 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
