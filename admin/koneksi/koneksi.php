<?php
$koneksi=mysqli_connect("localhost","root","","db_wedding");
	// cekkoneksi
	if(!$koneksi){
	die("Error koneksi: ".mysqli_connect_errno());
	}
	?>
