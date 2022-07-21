# Project00 - Persiapan Kelas

# Garis Besar
✅Perkenalan <br>
✅Spesifikasi laptop <br>
✅Koneksi internet <br>
✅Google Classroom <br>
✅Google Calendar <br>
✅GitHub <br>
✅Git <br>
✅Xampp (Apache, MySQL, PHPMyAdmin) <br>
✅Text Editor <br>
✅Web Browser <br>
✅Discord <br>

## Catatan

### Perintah Git

Perintah untuk melihat perintah Git
```
git --version
```

Perintah untuk menguodate versi Git di Windows
```
git update-git-for-windows
```

perintah untuk cek status git
```
git status
```

### Membuat Koneksi Database

Skrip PHP dan MySQL untuk membuat koneksi ke Database

```php
		<?php 

	// buat koneksi
	$hostname = "localhost";
	$username = "root";
	$database = "phpii_project00_acho";

	$connection = mysqli_connect($hostname, $username, $database);

	if($connection->connect_error){
		echo "Koneksi Gagal!";
	} else{
		echo "Koneksi Berhasil!";
	}

	
	// fungsi tambah
	// fungsi ubah
	// fungsi hapus

 ?>
