<?php
	session_start();

	if (!isset($_POST['nim']) and !isset($_POST['pass']) and !isset($_POST['nama']) and !isset($_POST['kelas']) and !isset($_POST['kelamin']) and !isset($_POST['alamat']) and !isset($_POST['fakultas']) and !isset($_POST['hobi'])) {
		echo "masukkan data terlebih dahulu <a href='registrasi.php'>input disini</a>";
		echo "Login <a href='login.php'>Disini!</a>";
	}
	else{
		include("koneksi.php");
	}
?>
