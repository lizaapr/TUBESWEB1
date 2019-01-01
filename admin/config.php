<?php
//$error='';
date_default_timezone_set('Asia/Jakarta');
$name = 'pw_adminn';
$konek =mysqli_connect("localhost", "root", "") or die ("Koneksi ke database gagal!");
$db= mysqli_select_db($konek, $name) or die ("Tidak ada database yang dipilih");
?>