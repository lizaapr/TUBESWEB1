<?php 
$koneksi = mysqli_connect("localhost","root","","pw_admin");
if (!$koneksi) {
	die("KONEKSI GAGAL".mysqli_connect_error());
}

 ?>