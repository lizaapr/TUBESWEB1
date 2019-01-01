<?php
	session_start();
	include"include/config.php";
	if(empty ($_SESSION['username']) )
	{
		exit("<script> window.alert('Anda Harus Login Terlebih Dahulu');
				window.location='logoutadmin.php';</script>");
	}
	session_destroy();
	exit("<script>window.alert('Thank you');
		window.location='logoutadmin.php';</script>");
		?>