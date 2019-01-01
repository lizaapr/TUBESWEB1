<?php
	$conn = mysqli_connect("localhost","root","","pw_admin");
	
	if(!$conn){
		echo "Database connection failed...";
	}
?>