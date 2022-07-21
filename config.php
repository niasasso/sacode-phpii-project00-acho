<?php 

	// buat koneksi
	$hostname = "localhost";
	$username = "root";
	$database = "phpii_project00_acho";

	$connection = mysqli_connect($hostname, $username, $database);

	if($connection->connect_error){
		echo "Koneksi Gagal!"
	} else{
		echo "Koneksi Berhasil!";
	}

	
	// fungsi tambah
	// fungsi ubah
	// fungsi hapus


 ?>